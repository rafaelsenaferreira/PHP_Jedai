<?php
	
	namespace controllers;

	
	class Controller
	{
		//temos como acessar as classes protected dentro dessas classes e as classes que herdam, mas não pode ser acessadas a partir de uma classe instanciada
		protected $view;
		protected $model;

		public function __construct($view,$model){
			$this->view = $view;
			$this->model = $model;
		}

		//a função index tem a função de todos os controladores
		public function index(){
			
		}
	}

?>