<?php
	namespace app\controllers;

	use core\App;
	use core\ParamUtils;

	use app\forms\ArticlePageForm;

	use app\controllers\ArticlesCtrl;

	class ArticlePageCtrl {
		public $form;
		public $articles;

		public function __construct() {
			$this->form = new ArticlePageForm;
			$this->articles = new ArticlesCtrl;
		}
		
		public function action_upvote() {
			$this->form->id = ParamUtils::getFromRequest('idArticle');
			$this->form->idUser = ParamUtils::getFromRequest('idUser');

			$that = $this;
			//check if there are upvotes
			$upvotes = App::getDB()->select('upvote', '*', array(
				'idArticle' => $this->form->id,
				'idUser' => $this->form->idUser
			));

			if(count($upvotes) == 0) {
				App::getDB()->insert('upvote', array(
					'idArticle' => $this->form->id,
					'idUser' => $this->form->idUser
				)); 
			} else {
				App::getDB()->delete('upvote', array(
					"AND" => array(
						'idArticle' => $this->form->id,
						'idUser' => $this->form->idUser
					)
				)); 
			}

			$this->action_articlePage();
		}

		public function action_comment() {
			$this->form->comment = ParamUtils::getFromRequest('comment');
			$this->form->id = ParamUtils::getFromRequest('idArticle');
			$this->form->idUser = ParamUtils::getFromRequest('idUser');

			if($this->form->comment != null) {
				App::getDB()->insert('comment', array(
					'content' => $this->form->comment,
					'idArticle' => $this->form->id,
					'idUser' => $this->form->idUser
				));
			}

			$this->action_articlePage();
		}

		public function action_removeComment() {
			$this->form->idComment = ParamUtils::getFromRequest('idComment');
			$this->form->id = ParamUtils::getFromRequest('idArticle');
			$this->form->idUser = ParamUtils::getFromRequest('idUser');

			App::getDB()->delete('comment', array(
				'idComment' => $this->form->idComment
			));

			$this->action_articlePage();
		}

		public function action_removeArticle() {
			$this->form->id = ParamUtils::getFromRequest('idArticle');
			$this->form->idUser = ParamUtils::getFromRequest('idUser');

			App::getDB()->delete('article', array(
				'idArticle' => $this->form->id
			));

			$this->articles->action_articles();
		}

		public function action_articlePage() {
			$this->form->id = ParamUtils::getFromRequest('idArticle');
			$this->form->idUser = ParamUtils::getFromRequest('idUser');

			// articles with user's names and categories
			if($this->form->id != null) {
				$article = App::getDB()->select(
					'article',
					array(
						'[><]user' => array('article.idUser' => 'idUser'),
						'[><]category' => array('article.idCategory' => 'idCategory')
					),
					array(
						'article.idArticle', 
						'article.createdAt',
						'article.title',
						'article.content',
						'article.idUser',
						'user.login',
						'category.name'
					),
					array(
						'article.idArticle' => $this->form->id
					)
				); 
			}

			//check if there are upvotes
			$upvotes = App::getDB()->select('upvote', '*', array(
				'idArticle' => $this->form->id
			));

			if(count($upvotes) == 0) {
				$this->form->upvoteButtonText = "UPVOTE";
			} else {
				$this->form->upvoteButtonText = "REMOVE UPVOTE";
			}

			//check if there are comments
			$comments = App::getDB()->select('comment', array(
				'[><]user' => array('comment.idUser' => 'idUser')
			), array(
				'comment.idComment',
				'comment.content',
				'comment.createdAt',
				'user.login',
				'user.idUser'
			), array(
				'idArticle' => $this->form->id
			));

			App::getSmarty()->assign('upvotesNumber', count($upvotes));
			App::getSmarty()->assign('article', $article[0]);
			App::getSmarty()->assign('comments', $comments);
			App::getSmarty()->assign('upvoteButtonText', $this->form->upvoteButtonText);
			App::getSmarty()->assign('access', \core\SessionUtils::load('access', true));

			App::getSmarty()->display('articlePage.tpl');
		}
	}
?>