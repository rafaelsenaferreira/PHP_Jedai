<?php
	namespace Models;

	class ContatoModel{
		
		public static function enviarFormulario(){
			$mail = new \Email('vps.hotmail.com','testes@hotmail.com','teste123','Teste');
			$mail->addAdress('testes@ddsd.com','Teste');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}
	}

?>