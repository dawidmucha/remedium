<?php
	namespace app\controllers;

	use core\App;

	class ArticlesCtrl {
		public function action_articles() {
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
			); // articles with user's names

			// $category = App::getDB()->select(
			// 	'article',
			// 	array('[><]category' => array('article.idCategory' => 'idCategory')),
			// 	array(
			// 		'category.name'
			// 	)
			// 	);

			// App::getSmarty()->assign('category', $category);
			App::getSmarty()->assign('articles', $articles);
			App::getSmarty()->assign('access', \core\SessionUtils::load('access'));
			App::getSmarty()->display('articles.tpl');
		}
	}
?>