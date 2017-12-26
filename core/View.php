<?php

class View
{
	protected $_head, $_body, $_siteTitle = SITE_TITLE, $_outBuffer, $_layout = DEFAULT_LAYOUT;

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

	public function start($type)
	{
		$this->_outBuffer = $type;
		ob_start();
	}

	public function end()
	{
		if($this->_outBuffer == 'head'){
			$this->_head = ob_get_clean();	
		}
		elseif($this->_outBuffer == 'body'){
			$this->_body = ob_get_clean();
		}
		else
			die('use the start method first');
	}

	public function siteTitle()
	{
		return $this->_siteTitle;
	}

	public function setSiteTitle($title)
	{
		$this->_siteTitle = $title;
	}

	public function setLayout($path)
	{
		$this->_layout = $path;
	}
}