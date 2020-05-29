<?php
	namespace Models;

	class ContatoModel{
		
		public static function enviarFormulario(){
			$mail = new \Email('vps.hotmail.com','email@hotmail.com','senha','Teste');
			$mail->addAdress('email@ddsd.com','Teste');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}
	}

?>