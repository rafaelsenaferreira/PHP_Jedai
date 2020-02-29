<?php
	namespace views;

	
	class View{

	const DEFAULT_HEADER = 'header.php';
	const DEFAULT_FOOTER = 'footer.php';
		
		public function render($body,$header = null, $footer = null){
			if($header == null){
				//não esquecer de colocar o self pra chamar a constant, sempre em orientação ao objeto
				include('views/templates/'.self::DEFAULT_HEADER);
			}

				include('views/templates/'.$body);

			if($footer == null){
				include ('views/templates/'.self::DEFAULT_FOOTER);
			}

		}

	}

?>