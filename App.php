<?php
	define('INCLUDE_PATH_FULL','http://localhost/Projeto_MVC/');
	define('Header','View/Header');
	define('Footer','View/Footer');
	class App{
		public $controller;

		public function executar(){
			$url = isset($_GET['url']) ? $_GET['url'] : 'Home';


			if($url =='Home'){
				$controller = new Controller\HomeController($url);
				$controller->executar();
			}else if($url !='Home'){
				$url = explode('/',$url)[0];
				$url = ucfirst($url);
				if(file_exists('Controller\\'.$url.'Controller.php')){
					$class = 'Controller\\'.$url.'Controller';
					$controller =  new $class;
					$controller->executar();
				}else{
					include('View/Header.php');
					include('View/Erro.php');
					include('View/Footer.php');
				}
			}
			/*if($url =='Home'){
				include('View/Header.php');
				include('View/Home.php');
				include('View/Footer.php');
			}else if($url !='Home'){
				$url = explode('/', $url);
				if(file_exists('View/'.ucfirst($url[0]).'.php')){
					include('View/Header.php');
					include('View/'.$url[0].'.php');
					include('View/Footer.php');
				}else{
					include('View/Header.php');
					include('View/Erro.php');
					include('View/Footer.php');
				}
			}*/
		}

	}

?>