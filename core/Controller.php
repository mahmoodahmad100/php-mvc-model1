<?php

class Controller
{
	protected $_controller, $_action;
	public $view;

	public function __construct($controller, $action)
	{
		$this->_controller = $controller;
		$this->_action     = $action;
	}
}