<?php

	namespace  View;

	class MainView
	{
		private $header;
		private $footer;
		private $fileName;
		public $dados;
		
		function __construct($header,$footer,$fileName)
		{
			$this->header = $header;
			$this->footer = $footer;
			$this->fileName = $fileName;
			$this->dados ='';
		}

		public function render(){
			include($this->header.'.php');
			if($this->dados != ''){
				echo $this->dados;
			}
			include('View\\'.$this->fileName.'.php');
			
			include($this->footer.'.php');
		}
	}
?>