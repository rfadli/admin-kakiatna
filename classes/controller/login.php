<?php

class login_controller extends controller
{
	public function index()
	{
		$welcome = $this->getView ( DOCVIEW . "welcome/welcome.php", array());
		$p = array(
				'login' => $welcome,
		);
		echo $this->getView ( DOCVIEW . "template/template.php", $p );
	}
	
	public function login()
	{
		
		$db = Db::init();
		$stt = $db->user;
		$sdb = $stt->find();
			
		
		$error = array();
		$username= '';
		$pass= '';
		if(!empty($_POST))
		{
			
			if(isset($_POST['username']));
				$username = trim($_POST['username']);
			
			if(isset($_POST['pass']))
				$pass = trim($_POST['pass']);
			
			$validator = new Validator();

			$validator->addRule('username', array('require'));
			$validator->addRule('pass', array('require'));
			
			$validator->setData(array(
				"username" => $username,
				"pass" => $pass,
			));
			
			
			//foreach ($sdb as $ck) 
			//{
				//$duser = $ck['username'];
				//$dpass = $ck['password'];
				
				if($validator->isValid())
				{
					if(($username == 'admin') && ($pass == 'admin'))
					{
						$_SESSION['userid'] = $username;
						$this->redirect('/');
						exit;
					}				
				}
			//}				
		}

		$link = '/login/login';
		
		$ab = array(
			'username' => $username,
			'pass' => $pass,
			'link' => $link,
			'error' => $error
		);
		
		$view = $this->getView(DOCVIEW.'template/login.php', $ab);
		echo $view;
	}

	public function logout()
	{
		
		session_destroy ();
		
		header( 'Location: /' ) ;
		exit();
	}
}