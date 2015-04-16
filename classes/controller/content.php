<?php

class content_controller extends controller
{
	function index()
	{
		$idcategory = $_GET['idcategory'];
		$db = Db::init();
		$cont = $db->content;
		
		$p = array(
			"category_id" => $idcategory
		);
		
		$data = $cont->find($p);
		
		$p = array(
			'data' => $data,
			'idcategory' => $idcategory
		);
				
		$cont = $this->getView(DOCVIEW.'content/index.php', $p);
		
		$p = array(
			'content' => $cont,
		);
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;
	}
	
	function add()
	{
		$id = $_GET['idcategory'];
		$error = array();
		$judul = "";
		$isicontent = "";
		$foto = "";
		//$category = "";
		$by = "0";
		//$view = "0";
		$nama = "";
		$status = "no";
		$tag = "";
		$error = array();
		
		$db = Db::init();
		$dbcont = $db->content;
		
		if(!empty($_POST))
		{
			if(isset($_POST['judul']))
				$judul = $_POST['judul'];
			
			if(isset($_POST['tag']))
				$tag = $_POST['tag'];
				
			if(isset($_POST['isicontent']))
				$isicontent = $_POST['isicontent'];
			
			if(isset($_POST['status']))
				$status = 'yes';
			
			if(isset($_FILES['foto']['name']))
			{
				$name = $_FILES['foto']['name'];
				$type = $_FILES['foto']['type'];
				$tmp = $_FILES['foto']['tmp_name'];
				$size = $_FILES['foto']['size'];
			}
			
			$validator = new Validator();
			
			$parname = array(
					'table' => 'content', 
					'field' => 'judul'
				);
			
            $validator->addRule('judul', array('require', 'unique' => $parname));
			$validator->addRule('isicontent', array('require'));
			$validator->addRule('size', array('max' => 3000000));
			$validator->addRule('format', array('type'));
			
			$validator->setData(
                array(
               		'judul' => $judul,
               		'isicontent' => $isicontent,
               		'size' => intval($size),
               		'format' => $type,
            	)
			);
			
			
            if ($validator->isValid())
			{
				
				$namafoto = $_FILES['foto']['name'];
				if(strlen(trim($namafoto)) > 0)
				$dg = explode(".", $namafoto);
				$sha1file = sha1($dg[0]);
				$fotornm_1 = $sha1file.".".$dg[1];
				
				$expl_tag = $tag;
				$expl = explode(",", $expl_tag);
				
				$p = array(
					'judul' => trim($judul),
               		'isicontent' => trim($isicontent),
               		'category' => trim($category),
               		'status' => trim($status),
					'foto' => trim($fotornm_1),
					'tag' => $expl,
					'category_id' => trim($id), 
					'createdby' => trim($_SESSION['userid']),
					'time' => time(),
					
				);
				$dbcont->insert($p);
				
				$target_path = IMAGE_PATH;
				$target_path = $target_path . basename($fotornm_1);
				move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);
				
				header("Location: ".'/content/index?idcategory='.$id);
				return;
			}
			else {
				$error = $validator->getErrors();
			}
		}
		
		$var = array(
			'judul' => $judul,
       		'isicontent' => $isicontent,
       		'status' => $status,
       		'foto' => $foto,
       		'tag' => $tag,
       		'error' => $error,
       		'link' => '/content/add?idcategory='.$id
		);
		$content = $this->getView(DOCVIEW.'content/add.php', $var);
		
		$c = array(
			'content' => $content
		);
		
		$view = $this->getView(DOCVIEW.'template/template.php', $c);
		echo $view;
	}

	function edit()
	{
		$id = $_GET['id'];
		$idcate = $_GET['idcategory'];
		
		$db = Db::init();
		$dbcont = $db->content;
		$data = $dbcont->findone(array('_id' => new MongoId($id)));
		$error = array();
		$judul = $data['judul'];
		$isicontent = $data['isicontent'];
		$category = $data['category'];
		$status = $data['status'];
		$foto = $data['foto'];
		$tag = $data['tag'];
		$error = array();
		
		if(!empty($_POST))
		{
			if(isset($_POST['judul']))
				$judul = $_POST['judul'];
				
			if(isset($_POST['isicontent']))
				$isicontent = $_POST['isicontent'];
				
			if(isset($_POST['category']))
				$category = $_POST['category'];
			
			if(isset($_POST['tag']))
				$tag = $_POST['tag'];
			
			$status = "no";
			if(isset($_POST['status']))
				$status = 'yes';
			
			if(isset($_FILES['foto']['name']))
				$foto = $_FILES['foto']['name'];
			
			if(isset($_FILES['foto']['name']))
			{
				$name = $_FILES['foto']['name'];
				$type = $_FILES['foto']['type'];
				$tmp = $_FILES['foto']['tmp_name'];
				$size = $_FILES['foto']['size'];
				
			}
			
			$validator = new Validator();
			
			$parname = array(
					'table' => 'content', 
					'field' => 'judul'
				);
			
            $validator->addRule('judul', array('require', 'unique' => $parname));
			$validator->addRule('isicontent', array('require'));
			$validator->addRule('category', array('require'));
			$validator->addRule('size', array('max' => 3000000));
			$validator->addRule('format', array('type'));
			
			
			$validator->setData(
                array(
               		'judul' => $judul,
               		'isicontent' => $isicontent,
               		'category' => $category,
               		'size' => intval($size),
               		'format' => $type,
            	)
			);
			
                    
            if ($validator->isValid())
			{
				$namafoto = $_FILES['foto']['name'];
				if(strlen(trim($namafoto)) > 0)
				$dg = explode(".", $namafoto);
				$sha1file = sha1($dg[0]);
				$fotornm_1 = $sha1file.".".$dg[1];
				
				$expl_tag = $tag;
				$expl = explode(",", $expl_tag);
				
				
				$p = array(
					'judul' => trim($judul),
               		'isicontent' => trim($isicontent),
               		'status' => trim($status),
               		'category' => new MongoId($_POST['category']),
					'foto' => trim($fotornm_1),
					'tag' => $expl,
					'category_id' => trim($idcate),
					'createdby' => trim($_SESSION['userid']),
					'time' => time(),
					
				);
				$dbcont->update(array('_id' => new MongoId($id)), array('$set' => $p));
				
				$target_path = IMAGE_PATH;
				$target_path = $target_path . basename($fotornm_1);
				
				move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);
				
				header("Location: ".'/content/index?idcategory='.$idcate);
				return;
			}
			else {
				$error = $validator->getErrors();
			}
		}
		
		$var = array(
			'judul' => $judul,
       		'isicontent' => $isicontent,
       		'category' => $category,
       		'status' => $status,
       		'foto' => $foto,
       		'tag' => $tag,
       		'error' => $error,
       		'link' => "/content/edit?id=".$id.'&idcategory='.$idcate
		);
		$content = $this->getView(DOCVIEW.'content/add.php', $var);
		
		$c = array(
			'content' => $content
		);
		
		$view = $this->getView(DOCVIEW.'template/template.php', $c);
		echo $view;
	}	
	
	function delete()
	{
		$id = $_GET['id'];
		$idcate = $_GET['idcategory'];
		$db = Db::init();
		$catdat = $db->content;
		$catdat->remove(array('_id' => new MongoId($id)));
		
		header("Location: ".'/content/index?idcategory='.$idcate);
		return;
		//header("Location: ".'/content/index/');
	}		
}
