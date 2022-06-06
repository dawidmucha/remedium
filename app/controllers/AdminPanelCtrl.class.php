<?php
	namespace app\controllers;

	use app\forms\SignUpForm;
	use core\ParamUtils;
	use core\App;

	use app\forms\AdminPanelForm;

	class AdminPanelCtrl {
		private $form;

		public function __construct() {
			$this->form = new AdminPanelForm();
		}

		public function action_adminPanel() {
			$users = App::getDB()->select('user', array(
				'[><]rolelog' => array('user.idUser' => 'idUser'),
				'[><]role' => array('rolelog.idRole' => 'idRole')
			), array(
				'user.idUser',
				'user.login',
				'user.email',
				'user.createdAt',
				'role.name',
				'role.idRole'
			), array(
				'archived' => false,
				'ORDER' => array(
					'user.idUser' => 'ASC'
				)
			));
			
			App::getSmarty()->assign('users', $users);
			App::getSmarty()->display('adminPanel.tpl');
		}

		public function action_adminPanelEdit() {
			$idUser = ParamUtils::getFromRequest('idUser');
			$login = ParamUtils::getFromRequest('login');
			$email = ParamUtils::getFromRequest('email');
			
			App::getSmarty()->assign('idUser', $idUser);
			App::getSmarty()->assign('login', $login);
			App::getSmarty()->assign('email', $email);
			App::getSmarty()->display('adminPanelEdit.tpl');
		}

		public function action_adminPanelEditSubmit() {
			$login = ParamUtils::getFromRequest('login');
			$email = ParamUtils::getFromRequest('email');
			$idUser = ParamUtils::getFromRequest('idUser');

			App::getDB()->update('user', array(
				'login' => $login,
				'email' => $email
			), array(
				'idUser' => $idUser,
			));

			$this->action_adminPanel();
		}

		public function action_adminPanelAdmin() {
			$login = ParamUtils::getFromRequest('login');
			$email = ParamUtils::getFromRequest('email');
			$idUser = ParamUtils::getFromRequest('idUser');
			$role = ParamUtils::getFromRequest('role');
			$idRole = ParamUtils::getFromRequest('idRole');

			if($idRole == 1) {
				App::getDB()->update('rolelog', array(
					'idRole' => 2
				), array(
					'idUser' => $idUser
				));
			} else if($idRole == 2) {
				App::getDB()->update('rolelog', array(
					'idRole' => 1
				), array(
					'idUser' => $idUser
				));
			}

			$this->action_adminPanel();
		}

		public function action_adminPanelRemove() {
			$login = ParamUtils::getFromRequest('login');
			$email = ParamUtils::getFromRequest('email');
			$idUser = ParamUtils::getFromRequest('idUser');

			App::getDB()->update('rolelog', array(
				'revokedAt' => date("Y-m-d H:i:s", time())
			), array(
				'idUser' => $idUser
			));

			App::getDB()->update('user', array(
				'archived' => true
			), array(
				'idUser' => $idUser
			));

			$this->action_adminPanel();
		}
	}
?>