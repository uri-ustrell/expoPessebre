<?php 

class Autoload {



	public function __construct () {

		//con la siguiente function haremos todops los includes

		//documentacion --> php.net/manual/es/function.spl-autoload-register.php

		spl_autoload_register( function( $class_name ) {

			//indicamos ruta para las classes modelos

			$models_path = './models/' . $class_name . '.php';



			//indicamos ruta para las clases controladoras

			$controllers_path = './controllers/' . $class_name . '.php';



			//comprovación de las rutas:

			// echo "<p>$models_path</p>" . "<p>$mailing_path</p>"; 



			//evaluamos si los archivos existen i despues los requerimos

			if ( file_exists($models_path) )  require_once($models_path);



			if ( file_exists($controllers_path) )  require_once($controllers_path);

		});

	}

} 