<?php
class category_controller extends controller
{
	public function index()
	{
		$db = Db::init();
		$stg = $db->category;
		$data = $stg->find();
		
		$p = array(
			'data' => $data,
		);	
		
		$content = $this->getView(DOCVIEW.'category/index.php', $p);
		
		$p = array(
			'content' => $content
		);
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;
	}
	
	public function add()
	{
		$db = Db::init();
		$stt = $db->category;
		$data = $stt->find();
		$error = array();
		
		if(!empty($_POST))
		{
			$name = '';
			if(isset($_POST['name']));
				$name = trim($_POST['name']);
			
			$menu="disable";
			if(isset($_POST['menu']))
				$menu="enable";
			
			$keterangan = '';
			if(isset($_POST['keterangan']));
				$keterangan = trim($_POST['keterangan']);
			
			$title_menu = '';
			if(isset($_POST['title_menu']));
				$title_menu = trim($_POST['title_menu']);
			
			$url_menu = '';
			if(isset($_POST['url_menu']));
				$url_menu = trim($_POST['url_menu']);
			
			$no_urut = 0;
			if(isset($_POST['no_urut']));
				$no_urut = trim($_POST['no_urut']);
			
			$submenu = "disable";
			if(isset($_POST['submenu']))
				$submenu = "enable";
			
			$validator = new Validator();
			
			$parname = array(
					'table' => 'category', 
					'field' => 'name'
				);
			
			$validator->addRule('name', array('require'));
			$validator->addRule('title_menu', array('require', 'unique' => $parname));
			
			$validator->setData(array(
				"name" => $name,
				"title_menu" => $title_menu,
			));
			
			if($validator->isValid())
			{
				$db = Db::init();
				$stt = $db->category;
				$data = array(
					'name' => $name,
					'menu' => $menu,
					'title_menu' => $title_menu,
					'keterangan' => $keterangan,
					'url_menu' => $url_menu,
					'submenu' => $submenu,
					'no_urut' => intval($no_urut),
					'time_created' => time(),
				);
				
				$stt->insert($data);
				
				header("Location: ".'/category/index/');
				return;
			}
			else
			{
				$error = $validator->getErrors();
			}
		}
		else
		{
			$name = '';
			$menu = '';
			$title_menu = '';
			$keterangan = '';
			
			$url_menu = '';
			if(isset($sdb['url_menu']))
				$url_menu = $sdb['url_menu'];
			
			$submenu = '';
			
			$no_urut = 0;
			if(isset($sdb['no_urut']))
				$no_urut = $sdb['no_urut'];
		}
		
		$link = '/category/add';
		
		$p = array(
			'name' => $name,
			'menu' => $menu,
			'title_menu' => $title_menu,
			'url_menu' => $url_menu,
			'keterangan' => $keterangan,
			'no_urut' => $no_urut,
			'submenu' => $submenu,
			'error' => $error,
			'data' => $data,
			'link' => $link
		);
		
		$content = $this->getView(DOCVIEW.'category/add.php', $p);
		
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
		$stt = $db->category;
		$sdb = $stt->findOne(array('_id' => new MongoId($id)));
		
		if(!empty($_POST))
		{
			$name = '';
			if(isset($_POST['name']));
				$name = trim($_POST['name']);
			
			$menu="disable";
			if(isset($_POST['menu']))
				$menu="enable";
			
			$keterangan = '';
			if(isset($_POST['keterangan']));
				$keterangan = trim($_POST['keterangan']);
			
			$title_menu = '';
			if(isset($_POST['title_menu']));
				$title_menu = trim($_POST['title_menu']);
			
			$url_menu = '';
			if(isset($_POST['url_menu']));
				$url_menu = trim($_POST['url_menu']);
			
			$no_urut = 0;
			if(isset($_POST['no_urut']));
				$no_urut = trim($_POST['no_urut']);
			
			$submenu = "disable";
			if(isset($_POST['submenu']))
				$submenu = "enable";
			
			
			$validator = new Validator();
			$validator = new Validator();
			$validator->addRule('name', array('require'));
			$validator->addRule('title_menu', array('require'));
			
			$validator->setData(array(
				"name" => $name,
				"title_menu" => $title_menu,
			));
			
			if($validator->isValid())
			{
				$db = Db::init();
				$stt = $db->category;
				$data = array(
					'name' => $name,
					'menu' => $menu,
					'title_menu' => $title_menu,
					'keterangan' => $keterangan,
					'url_menu' => $url_menu,
					'no_urut' => intval($no_urut),
					'submenu' => $submenu,
					'time_created' => time(),
				);
				$newdata = array('$set' => $data);
				$stt->update(array("_id" => new MongoId($id)), $newdata);
				header("Location: ".'/category/index/');
				return;
			}
			else
			{
				$error = $validator->getErrors();	
			}
		}
		else
		{
			$name = $sdb['name'];
			$menu = $sdb['menu'];
			$title_menu = $sdb['title_menu'];
			$keterangan = $sdb['keterangan'];
			$url_menu = $sdb['url_menu'];
			$no_urut = $sdb['no_urut'];
			//$submenu = $sdb['submenu'];
			
			$submenu = '';
			if(isset($sdb['submenu']))
				$submenu = $sdb['submenu'];
		}
		
		$link = '/category/edit?id='.$id;
		
		$p = array(
			'name' => $name,
			'menu' => $menu,
			'title_menu' => $title_menu,
			'url_menu' => $url_menu,
			'no_urut' => $no_urut,
			'keterangan' => $keterangan,
			'submenu' => $submenu,
			'link' => $link,
		);
		
		$content = $this->getView(DOCVIEW.'category/add.php', $p);
		
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
		$stt = $db->category;
		
		$stt->remove(array('_id' => new MongoId($id)));
		header("Location: ".'/category/index/');
	}
}
?>