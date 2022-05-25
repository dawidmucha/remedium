<?php
	namespace app\controllers;

	use core\App;
	use core\ParamUtils;

	use app\forms\ArticlePageForm;

	class ArticlePageCtrl {
		public $form;

		public function __construct() {
			$this->form = new ArticlePageForm;
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
				'idArticle' => $this->form->id,
				'idUser' => $this->form->idUser
			));

			if(count($upvotes) == 0) {
				$this->form->upvoteButtonText = "UPVOTE";
			} else {
				$this->form->upvoteButtonText = "REMOVE UPVOTE";
			}

			App::getSmarty()->assign('upvotesNumber', count($upvotes));
			App::getSmarty()->assign('article', $article[0]);
			App::getSmarty()->assign('upvoteButtonText', $this->form->upvoteButtonText);
			App::getSmarty()->assign('access', \core\SessionUtils::load('access', true));
			App::getSmarty()->display('articlePage.tpl');
		}
	}
?>