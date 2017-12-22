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

		if(file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php'))
		{
			include ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php';
			include ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->_layout . '.php';
		}
		else
			die('the view ' . $viewName. ' does not found');
	}

	public function content($type)
	{
		if($type == 'head')
			return $this->_head;
		elseif($type == 'body')
			return $this->_body;
		else
			return false;
	}
}