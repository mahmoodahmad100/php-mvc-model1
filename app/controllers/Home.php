<?php

class Home extends Controller
{
	public function __construct($contorller, $action)
	{
		parent::__construct($contorller, $action);
	}

	public function indexAction()
	{
		die("this is the home/indexAction()");
	}
}