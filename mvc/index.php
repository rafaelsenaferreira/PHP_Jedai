<?php
	/*
	MVC
	M = Model
	V = View
	C = Controler

		/Contato
			Contato Controler => Controlador geral.
			Contato View => Responsável por renderizar a página.
			Contato Model => Onde tem todas as funções necessárias.	
	*/
	//lembrando que autoload serve para carregar as variáveis dinamicamente
	//spl_autoload_register serve para carregar todas as classes 

	$autoload = function($class){

		if($class == 'Email'){
			include('phpmailer/PHPMailerAutoload.php');
		}		
		include($class.'.php');
	};

	spl_autoload_register($autoload);
	$app = new Application();
	$app->executar();

?>