<?php
class welcome_controller extends controller 
{
	public function index()
	{
		
		$content = $this->getView(DOCVIEW.'welcome/welcome.php', array());
		$p = array(
			'content' => $content
		);
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;
	}

}