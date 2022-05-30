<?php

	namespace app\controllers;

	use core\App;
	use core\Utils;
	use core\RoleUtils;
	use core\ParamUtils;
	use core\SessionUtils;

	use app\forms\LogInForm;

	class LogInCtrl {
		public $form;

		public function __construct() {
			$this->form = new LogInForm();
		}

		public function action_login() {
			$this->form->login = ParamUtils::getFromRequest('login');
			$this->form->password = ParamUtils::getFromRequest('password');
			
			// select all users that match given login and password
			$users = [];
			$users = App::getDB()->select('user', '*', [
				"login" => $this->form->login,
				"password" => $this->form->password 
			]);

			if(count($users) == 1) {
				//find user's current role
				$access = App::getDB()->select('rolelog', '*', [
					"AND" => [
						"idUser" => $users[0]['idUser'],
						"revokedAt" => null
					]
				]);

				if(count($access) == 1) {
					if($access[0]["idRole"] == 1) { //admin
						RoleUtils::addRole('admin');
					} else if($access[0]["idRole"] == 2) { //user
						RoleUtils::addRole('user');
					} 
					// TODO: remove the first one (backwards combatibility)
					SessionUtils::store('id', $users[0]['idUser']);
					SessionUtils::store('idUser', $users[0]['idUser']);
					SessionUtils::store('username', $users[0]['login']);
				} // TODO: error when 2 types of access

				App::getRouter()->redirectTo('articles');
			} else { // TODO: error when 2 accounts with the same name
				$this->generateView();
			}
		}

		public function action_logout() {
			session_destroy();

			App::getRouter()->redirectTo('articles');
		}

		public function generateView() {
			App::getSmarty()->assign('form', $this->form);
			App::getSmarty()->display('login.tpl');			
		}
	}
?>