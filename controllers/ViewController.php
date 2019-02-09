<?php 

class ViewController{

	private static $view_path = './views/';

	public function load_view ($view) {

		$view = ($view == null) ? 'home' : $view;

		//header
		require_once( self::$view_path . 'header.php' );

		//content
		require_once( self::$view_path . $view . '.php');

		//footer
		require_once( self::$view_path . 'footer.php');
	}
}