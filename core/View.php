<?php

class View
{
	protected $_head, $_body, $_siteTitle, $_outBuffer, $_layout = DEFAULT_LAYOUT;

	public function __construct()
	{

	}

	public function render($viewName)
	{
		$viewArr    = explode('/', $viewName);
		$viewString = implode(DS, $viewArr);
	}
}