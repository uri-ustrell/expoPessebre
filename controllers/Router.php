<?php

class Router {

	public $route;
	
	public function __construct($route){
		//definim un router default
		$this->route = isset($_GET['r']) ? $_GET['r'] : 'home';

		//iniciem sessio
		if ( !isset($_SESSION) )  session_start(['use_only_cookies' => 1]);

		//inicio viewController i l'executo en funció de 'r' amb un switch
		$ViewController = new ViewController();

		switch ($this->route) {
			case '1':
				$ViewController->load_view('sample');
				break;

			case '2':
				$ViewController->load_view('sample');
				break;

			case '3':
				$ViewController->load_view('sample');
				break;

			case '4':
				$ViewController->load_view('sample');
				break;

			case '5':
				$ViewController->load_view('sample');
				break;

			case '6':
				$ViewController->load_view('sample');
				break;

			case '7':
				$ViewController->load_view('sample');
				break;

			case '8':
				$ViewController->load_view('sample');
				break;

			case '9':
				$ViewController->load_view('sample');
				break;

			case '10':
				$ViewController->load_view('sample');
				break;

			case '11':
				$ViewController->load_view('sample');
				break;
			case '12':
				$ViewController->load_view('sample');
				break;

			case '13':
				$ViewController->load_view('sample');
				break;

			case '14':
				$ViewController->load_view('sample');
				break;

			default:
				$ViewController->load_view('home');
				break;
		}
	}

}