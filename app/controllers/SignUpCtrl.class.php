<?php
	namespace app\controllers;

	use app\controllers\LogInCtrl;

	use app\forms\SignUpForm;
	use core\ParamUtils;
	use core\App;

	class SignUpCtrl {
		private $form;
		public $logIn;

		public function __construct() {
			$this->form = new SignUpForm();
			$this->logIn = new LogInCtrl();
		}

		public function action_signup() {
			$this->form->email = ParamUtils::getFromRequest('email');
			$this->form->login = ParamUtils::getFromRequest('login');
			$this->form->password = ParamUtils::getFromRequest('password');
			$this->form->password2 = ParamUtils::getFromRequest('password2');

			if($this->validate()) {
				App::getDB()->insert("user", [
					"email" => $this->form->email,
					"login" => $this->form->login,
					"password" => $this->form->password
				]);

				$idUser = App::getDB()->id();

				App::getDB()->insert('rolelog', [
					"idRole" => '2',
					"idUser" => $idUser
				]);

				$this->form->email = null;
				$this->form->login = null;
				$this->form->password = null;
				$this->form->password2 = null;

				$this->logIn->action_login();
			};

			$this->generateView();
		}

		public function validate() {
			if($this->form->email == null) return false;
			if($this->form->login == null) return false;
			if($this->form->password == null) return false;
			if($this->form->password2 == null) return false;

			if($this->form->password != $this->form->password2) return false;

			$credentialsTaken = App::getDB()->select('user', '*', [
				"OR" => [
					"email" => $this->form->email,
					"login" => $this->form->login
				]
			]);

			if(count($credentialsTaken) > 0) return false;

			return true;			
		}

		public function generateView() {
			App::getSmarty()->assign('form', $this->form);
			App::getSmarty()->display('signup.tpl');
		}
	}
?>