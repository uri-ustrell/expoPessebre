<?php 

	//unique (manually) require
	require_once('controllers/Autoload.php');

	//load all needed class
	$autoload = new Autoload();

	//recojo la variable enviada por GET
	$route = isset( $_GET['r']) ? $_GET['r'] : 'home';

	//crido al router amb la variable ruta(r);
	$ruta = new Router( $route );

?>