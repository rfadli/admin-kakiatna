<div class="mws-panel grid_8">
	<div class="mws-panel-header">
	<span>Add Category</span>
	</div>
	<div class="mws-panel-body no-padding">
	<form class="mws-form" action="<?php echo $link; ?>" role="form" method="post" enctype="multipart/form-data">
	
		<div class="mws-form-inline">
			<div class="mws-form-row">
				<label class="mws-form-label">Name</label>
				<div class="mws-form-item">
					<?php
						echo '<input type="text" name="name" class="small" value="'.$name.'"/>';
					?>
					<?php
					if(isset($error['name']))
						{
							echo '<div class="mws-error">';
							foreach($error['name'] as $message){
								echo $message.' ';
							}
	                        echo '</div>';
						}
					?>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">Title Menu</label>
				<div class="mws-form-item">
					<?php
						echo '<input type="text" name="title_menu" class="small" value="'.$title_menu.'"/>';
					?>
					<?php
					if(isset($error['title_menu']))
						{
							echo '<div class="mws-error">';
							foreach($error['title_menu'] as $message){
								echo $message.' ';
							}
	                        echo '</div>';
						}
					?>
				</div>
			</div>
			
			<div class="mws-form-row">
				<label class="mws-form-label">Url Menu</label>
				<div class="mws-form-item">
					<?php
						echo '<input type="text" name="url_menu" class="small" value="'.$url_menu.'"/>';
					?>
				</div>
			</div>
			
			<div class="mws-form-row">
				<label class="mws-form-label">Sub Menu</label>
				<div class="mws-form-item clearfix">
					<ul class="mws-form-list inline">
						<?php
				        if($submenu == "enable")
						{
							echo '<li>';
							echo '<input type="checkbox" name="submenu"  checked/> Enable';
							echo '</li>';
						}
						else 
						{
							echo '<li>';
							echo '<input type="checkbox" name="submenu" /> Enable';
							echo '</li>';
						}            
	                  ?>
					</ul>
				</div>
			</div>
			
			<div class="mws-form-row">
				<label class="mws-form-label">No Urut</label>
				<div class="mws-form-item">
					<?php
						echo '<input type="text" name="no_urut" class="small" value="'.$no_urut.'"/>';
					?>
				</div>
			</div>
			
			<div class="mws-form-row">
				<label class="mws-form-label">Keterangan </label>
				<div class="mws-form-item">
					<?php
						echo '<input type="text" name="keterangan" class="small" value="'.$keterangan.'"/>';
					?>
				</div>
			</div>
			
			<div class="mws-form-row">
				<label class="mws-form-label">Menu</label>
				<div class="mws-form-item clearfix">
					<ul class="mws-form-list inline">
						
						<?php
				        if($menu == "enable")
						{
							echo '<li>';
							echo '<input type="checkbox" name="menu"  checked/> Enable';
							echo '</li>';
						}
						else 
						{
							echo '<li>';
							echo '<input type="checkbox" name="menu" /> Enable';
							echo '</li>';
						}            
	                  ?>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="mws-button-row">
			<input type="submit" value="Submit" class="btn btn-danger">
			<input type="reset" value="Reset" class="btn ">
		</div>
</form>
