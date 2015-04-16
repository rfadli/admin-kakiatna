<div class="mws-panel grid_8">
<div class="mws-panel-header">
	<span>Tambah Content</span>
</div>
<div class="mws-panel-body no-padding">
	<form enctype="multipart/form-data" class="mws-form" action="<?php echo $link; ?>" method="post">
		<div class="mws-form-inline">
			<div class="mws-form-row">
				<label class="mws-form-label">Judul</label>
				<div class="mws-form-item">
					<input type="text" class="small" name="judul" value="<?php echo $judul; ?>" placeholder="Judul">
					
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">Isi Content</label>
				<div class="mws-form-item">
					<textarea rows="" cols="" class="large" name="isicontent"><?php echo $isicontent; ?></textarea>
				</div>
			</div>

			<div class="mws-form-row">
				<label class="mws-form-label">Category</label>
				<div class="mws-form-item">
					<select class="large" name="category">
						
						<?php
						$db = Db::init();
						$cat = $db->category;
						$datcat = $cat->find();
						
						foreach ($datcat as $dat)
						{
							if (trim($dat['_id']) == $category) 
							{
								echo "<option value='".trim($dat['_id'])."' selected>".$dat['name']."</option>";
							}
							else 
							{
								echo "<option value='".trim($dat['_id'])."'>".$dat['name']."</option>";
							}
						}
						?>	
					</select>
				</div>
			</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">Status</label>
				<div class="mws-form-item clearfix">
					<ul class="mws-form-list inline">
					
						<?php
						if($status == 'yes')
						{
						echo '<li><input type="checkbox" checked="checked" id="aktif" name="status" value="yes">Active</li>';
						}
						else{
							echo '<li><input type="checkbox" checked="checked" id="aktif" name="status" value="no">Active</li>';
						}
						?>
					</ul>
				</div>
			</div>
			
			<div class="mws-form-row">
				<label class="mws-form-label">Tag</label>
				<div class="mws-form-item">
					<textarea rows="" cols="" class="large" name="tag"><?php
					$db = Db::init();
					$cont = $db->content;
					$q = array (
						'tag' => $tag
					);
					$cari = $cont->find($q);
					foreach ($cari as $cont) 
					{
						if(isset($cont['tag']))
						{
							$tt = $cont['tag'];
							foreach ($tt as $key => $value) 
							{
								echo $value.",";	
							}
						}
					}
					
					?></textarea>
				</div>
			</div>

			<div class="mws-form-row">
	        	<label class="mws-form-label">Foto</label>
	        	<div class="mws-form-item">
	        		<?php	
					if(isset($foto))
					{
					   	if(strlen(trim($foto)) > 0)
						{
							echo '<img src="'.IMAGE_KAKI.$foto.'" width="210" height="210" alt="" /><br /><br />';
						}
					}
					?>   
			        <span><strong>JPG</strong> , <strong>JPEG</strong> , <strong>PNG</strong> file only</span>
					<div id="image-front_div">
                		<input type="file" name="foto" class="large" />
                		<?php
                		if(isset($error['size']))
						{
							echo '<div class="mws-error">';
							foreach($error['size'] as $message){
								echo $message.' ';
							}
	                        echo '</div>';
						}				
                		if(isset($error['format']))
						{
							echo '<div class="mws-error">';
							foreach($error['format'] as $message){
								echo $message.' ';
							}
	                        echo '</div>';
						}
                		?>
                	</div>                                    
                	<span>Max. <strong>3MB</strong></span>
	            </div>
			</div>
		<div class="mws-button-row">
			<input type="submit" value="Submit" class="btn btn-danger" name="btn">
		</div>
	</form>
</div>    	
</div>
