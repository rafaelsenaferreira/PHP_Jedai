<?php
	
	
	class Application
	{	
		//Constante que é pra quando não tiver nada na url amigável
		const DEFAULT = 'Login';

		public function run(){
			if(isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				//montar o nome da classe a partir de uma string
				$class = 'controllers\\'.ucfirst($url[0]).'Controller';
			}else{
				$class = 'controllers\\'.self::DEFAULT.'Controller';
				$url[0] = self::DEFAULT;
			}			

			$view = 'views\\'.ucfirst($url[0]).'View';
			$model = 'models\\'.ucfirst($url[0]).'Model';

			//TODO: Criar classes de controles, views e models.
			//TODO: Usar o extends para herdar os métodos das classes principais.

			/*
			echo $class;
			echo '<br />';
			echo $view;
			echo '<br />';
			echo $model;
			*/

			$controller = new $class(new $view, new $model);
			$controller->index();
		}
	}

?>