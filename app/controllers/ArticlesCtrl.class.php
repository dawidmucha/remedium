<?php
	namespace app\controllers;

	use core\App;
	use core\ParamUtils;

	use app\forms\ArticlesForm;

	class ArticlesCtrl {
		public $form;

		public function __construct() {
			$this->form = new ArticlesForm;
		}

		public function action_articles() {
			$this->form->filter = ParamUtils::getFromRequest('filter');

			// articles with user's names and categories
			if($this->form->filter == null) {
				$articles = App::getDB()->select(
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
					)
				); 
			} else {
				$articles = App::getDB()->select(
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
						'category.name' => $this->form->filter
					)
				); 
			}

			$categories = App::getDB()->select('category', 'name');

			App::getSmarty()->assign('categories', $categories);
			App::getSmarty()->assign('articles', $articles);
			App::getSmarty()->assign('access', \core\SessionUtils::load('access'));
			App::getSmarty()->display('articles.tpl');
		}
	}
?>