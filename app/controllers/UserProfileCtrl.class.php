<?php
	namespace app\controllers;

	use core\App;
	use core\ParamUtils;

	use app\forms\UserProfileForm;

	class UserProfileCtrl {
		public $form;

		public function __construct() {
			$this->form = new UserProfileForm;
		}

		public function action_user() {
			$this->form->user = ParamUtils::getFromRequest('user');
			$user = [];

			if($this->form->user != null) {
				$user = App::getDB()->select('user', '*', array('login' => $this->form->user));

				$userArticles = App::getDB()->select(
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
						'user.login' => $this->form->user
					)
				);
			}
			

			App::getSmarty()->assign('user', $user[0]);
			App::getSmarty()->assign('userArticles', $userArticles);
			App::getSmarty()->assign('access', \core\SessionUtils::load('access'));
			App::getSmarty()->display('user.tpl');
		}
	}
?>