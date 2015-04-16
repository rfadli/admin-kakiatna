<?php

class controller
{
	public function __construct()
	{
		$this->css = array();
		$this->js = array();
		
		
		if(!isset($_SESSION['userid']))
		{
			// gakada
			$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			if ($path != '/login/login')
			{
				$this->redirect('/login/login');
				exit;	
			}
		}
		else {
			if(strlen(trim($_SESSION['userid'])) == 0)
			{
				$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
				if ($path != '/login/login')
				{
					$this->redirect('/login/login');
					exit;	
				}
			}
		}
	}
	
	protected function getView($filename, $variable)
    {
        extract($variable);
        ob_start();
        (include $filename);
        $content = ob_get_contents();
        ob_end_clean ();
        return $content;
    }
	
	protected function redirect($page)
	{
		header( 'Location: '.$page ) ;
	}
}