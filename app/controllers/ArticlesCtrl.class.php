<?php
	namespace app\controllers;

	use core\App;

	class ArticlesCtrl {
		public function action_articles() {
			$articles = App::getDB()->select(
				'article',
				array('[><]user' => array('article.idUser' => 'idUser')),
				array(
					'article.idArticle', 
					'article.createdAt',
					'article.title',
					'article.content',
					'user.login'
				)
			); // articles with user's names

			App::getSmarty()->assign('articles', $articles);
			App::getSmarty()->assign('access', \core\SessionUtils::load('access'));
			App::getSmarty()->display('articles.tpl');
		}
	}
?>