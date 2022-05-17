<?php
	namespace app\controllers;

	use app\forms\NewPostForm;
	use core\App;

	class NewPostCtrl {
		private $form;

		public function __construct() {
			// $this->form = new NewPostForm();
		}

		public function action_newpost() {
			$this->generateView();
		}

		public function generateView() {
			App::getSmarty()->assign('form', $this->form);
			App::getSmarty()->display('newpost.tpl');
		}
	}
?>