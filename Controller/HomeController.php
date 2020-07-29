<?php
	namespace Controller;
	class HomeController{
		private $model;
		private $view;
		private $fileName;

		function __construct($fileName){
			$this->$fileName = $fileName;
			$this->model = new \Model\HomeModel;
			$this->view = new \View\MainView(Header,Footer,$fileName);
		}
		public function executar(){
			$this->getDados();
			$this->view->render();
		}

		public function getDados(){
			$this->view->dados = $this->model->getDados();
		}
	}

?>