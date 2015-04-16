<?php
class user_controller extends controller
{
	public function index()
	{
		$db = Db::init();
		$stg = $db->user;
		$data = $stg->find();
		
		$p = array(
			'data' => $data,
		);	
		
		$content = $this->getView(DOCVIEW.'user/index.php', $p);
		
		$p = array(
			'content' => $content
		);
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;
	}
	
	public function add()
	{
		$db = Db::init();
		$stt = $db->user;
		$data = $stt->find();
		
		if(!empty($_POST))
		{
			$username = '';
			if(isset($_POST['username']));
				$username = trim($_POST['username']);
			
			$password = '';
			if(isset($_POST['password']));
				$password = trim($_POST['password']);
			
			
			$validator = new Validator();
			$validator->addRule('username', array('require'));
			$validator->addRule('password', array('require'));
			
			$validator->setData(array(
				"username" => $username,
				"password" => $password,
			));
			
			if($validator->isValid())
			{
				$db = Db::init();
				$stt = $db->user;
				$data = array(
					'username' => $username,
					'password' => $password,
					'time' => time(),
					'created_by' => $_SESSION['userid'],
				);
				
				$stt->insert($data);
				
				header("Location: ".'/user/index/');
				return;
			}
			else
			{
				$error = $validator->getErrors();
			}
		}
		else
		{
			$username = '';
			$password = '';
		}
		
		$link = '/user/add';
		
		$p = array(
			'username' => $username,
			'password' => $password,
			'data' => $data,
			'link' => $link
		);
		
		$content = $this->getView(DOCVIEW.'user/add.php', $p);
		
		$p = array(
			'content' => $content
		);
		
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;
	}
	
	public function edit()
	{
		$id = $_GET['id'];
		$db = Db::init();
		$stt = $db->user;
		$sdb = $stt->findOne(array('_id' => new MongoId($id)));
		
		if(!empty($_POST))
		{
			$username = '';
			if(isset($_POST['username']));
				$username = trim($_POST['username']);
			
			$password = '';
			if(isset($_POST['password']));
				$password = trim($_POST['password']);
			
			
			$validator = new Validator();
			$validator->addRule('username', array('require'));
			$validator->addRule('password', array('require'));
			
			$validator->setData(array(
				'username' => $username,
				'password' => $password
			));
			
			if($validator->isValid())
			{
				$db = Db::init();
				$stt = $db->user;
				$data = array(
					'username' => $username,
					'password' => $password,
					'time' => time(),
				);
				$newdata = array('$set' => $data);
				$stt->update(array("_id" => new MongoId($id)), $newdata);
				header("Location: ".'/user/index/');
				return;
			}
			else
			{
				$error = $validator->getErrors();	
			}
		}
		else
		{
			$username = $sdb['username'];
			$password = $sdb['password'];
		}
		
		$link = '/user/edit?id='.$id;
		
		$p = array(
			'username' => $username,
			'password' => $password,
			'link' => $link,
		);
		
		$content = $this->getView(DOCVIEW.'user/add.php', $p);
		
		$p = array(
			'content' => $content
		);
		
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;
	}
	
	public function delete()
	{
		$id = $_GET['id'];
		$db = Db::init();
		$stt = $db->user;
		
		$stt->remove(array('_id' => new MongoId($id)));
		header("Location: ".'/user/index/');
	}
}
?>