<?php
	namespace app\controllers;

	use core\App;
	use core\ParamUtils;
	use core\SessionUtils;

	use app\forms\NewArticleForm;
	
	class NewArticleCtrl {
		public $form;

		public function __construct() {
			$this->form = new NewArticleForm();
		}

		public function action_newarticle() {
			$this->form->title = ParamUtils::getFromRequest('title');
			$this->form->content = ParamUtils::getFromRequest('content');
			$this->form->idCategory = ParamUtils::getFromRequest('idCategory');

			if($this->form->title != null && $this->form->content != null) {
				$idArticle = App::getDB()->insert('article', [
					"idUser" => SessionUtils::load("idUser"),
					"title" => $this->form->title,
					"content" => $this->form->content,
					"idCategory" => $this->form->idCategory
				]);
			};


			$this->generateView();
		}

		public function generateView() {
			App::getSmarty()->assign('form', $this->form);
			App::getSmarty()->display('newarticle.tpl');
		}
	}
?>