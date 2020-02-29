<?php
	
	//se existir o get url quero que o get seja url caso contrário seja home
	//ucfirst serve para a primeira letra ficar maiúscula
	//explode [0] serve para: se por exemplo tiver contato/pagina2 na url; só vai me retornar apenas contato 
	//Quando eu instancio uma variável como se fosse uma classe eu pego a string dela, ex: new $url(); nesse caso será cotato/controller
	define('INCLUDE_PATH','http://localhost/mvc/');
	define('INCLUDE_PATH_FULL','http://localhost/mvc/Views/pages/');
	class Application
	{
		
		public function executar(){		
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
			
			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = 'Controllers\\'.$url;
				//echo 'estou carregando a classe '.$url;
				$controler = new $className;
				$controler->executar();
			}else{
				die("Não existe esse controlador");
			}
		}
	}

?>