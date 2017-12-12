<?php

class Router
{
	public static function route($url){
		
		// controller
		$controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER ;
		$controller_name = $controller;
		array_shift($url);

		// action
		$action = (isset($url[0]) && $url[0] != '') ? $url[0]."Action" : "indexAction" ;
		$action_name = $action;
		array_shift($url);
		
		echo $controller . "<br>";
		echo $action . "<br>";
	}
}