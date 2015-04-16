<?php
class preference_controller extends controller
{
	public function index()
	{
		$db = Db::init();
		$stt = $db->preference;
		$sdb = $stt->findOne();
		
		if(!empty($_POST))
		{
			$judul = '';
			if(isset($_POST['judul']));
				$judul = trim($_POST['judul']);
			
			$tagline = '';
			if(isset($_POST['tagline']));
				$tagline = trim($_POST['tagline']);
			
			$deskripsi = '';
			if(isset($_POST['deskripsi']));
				$deskripsi = trim($_POST['deskripsi']);
			
			$name_website = '';
			if(isset($_POST['name_website']));
				$name_website = trim($_POST['name_website']);
			
			$contact = '';
			if(isset($_POST['contact']));
				$contact = trim($_POST['contact']);
			
			$address = '';
			if(isset($_POST['address']));
				$address = trim($_POST['address']);
			
			$phone = '';
			if(isset($_POST['phone']));
				$phone = trim($_POST['phone']);
			
			$email = '';
			if(isset($_POST['email']));
				$email = trim($_POST['email']);
			
			
			$validator = new Validator();
			$validator->addRule('name_website', array('require'));
			$validator->addRule('contact', array('require'));
			$validator->addRule('judul', array('require'));
			$validator->addRule('tagline', array('require'));
			$validator->addRule('deskripsi', array('require'));
			
			$validator->setData(array(
				"name_website" => $name_website,
				"judul" => $judul,
				"contact" => $contact,
				"tagline" => $tagline,
				"deskripsi" => $deskripsi,
			));
			
			if($validator->isValid())
			{
				$db = Db::init();
				$stt = $db->preference;
				$data = array(
					'name_website' => $name_website,
					'contact' => $contact,
					'address' => $address,
					'phone' => $phone,
					'email' => $email,
					'tagline' => $tagline,
					'deskripsi' => $deskripsi,
					'judul' => $judul
				);
				$newdata = array('$set' => $data);
				$stt->update(array(), $newdata);
				header("Location: ".'/preference/index/');
				return;
			}
			else
			{
				$error = $validator->getErrors();	
			}
		}
		else
		{
			$name_website = '';
			if(isset($sdb['name_website']))
				$name_website = $sdb['name_website'];
			
			$contact = '';
			if(isset($sdb['contact']))
				$contact = $sdb['contact'];
			
			$address = '';
			if(isset($sdb['address']))
				$address = $sdb['address'];
			
			$phone = '';
			if(isset($sdb['phone']))
				$phone = $sdb['phone'];
			
			$email = '';
			if(isset($sdb['email']))
				$email = $sdb['email'];
			
			$judul = '';
			if(isset($sdb['judul']))
				$judul = $sdb['judul'];
				
			$tagline = '';
			if(isset($sdb['tagline']))
				$tagline = $sdb['tagline'];
				
			$deskripsi = '';
			if(isset($sdb['deskripsi']))
				$deskripsi = $sdb['deskripsi'];
		}
		
		$link = '/preference/index';
		
		$p = array(
			'name_website' => $name_website,
			'contact' => $contact,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
			'judul' => $judul,
			'tagline' => $tagline,
			'deskripsi' => $deskripsi,
			'link' => $link,
		);	
		
		$content = $this->getView(DOCVIEW.'preference/index.php', $p);
		
		$p = array(
			'content' => $content
		);
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;
		
	}
	
}
?>