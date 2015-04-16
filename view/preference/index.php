<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span>Preference</span>
	</div>
	<div class="mws-panel-body no-padding">
		<form class="mws-form" action="<?php echo $link; ?>" role="form" method="post" enctype="multipart/form-data">
		
			<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">Website Name</label>
					<div class="mws-form-item">
						<?php
							echo '<input type="text" name="name_website" class="small" value="'.$name_website.'"/>';
						?>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">Contact</label>
					<div class="mws-form-item">
						<?php
							echo '<input type="text" name="contact" class="small" value="'.$contact.'"/>';
						?>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">Address </label>
					<div class="mws-form-item">
						<?php
							echo '<input type="text" name="address" class="small" value="'.$address.'"/>';
						?>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">Phone </label>
					<div class="mws-form-item">
						<?php
							echo '<input type="text" name="phone" class="small" value="'.$phone.'"/>';
						?>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">Email </label>
					<div class="mws-form-item">
						<?php
							echo '<input type="text" name="email" class="small" value="'.$email.'"/>';
						?>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">Judul Website</label>
					<div class="mws-form-item">
						<?php
							echo '<input type="text" name="judul" class="small" value="'.$judul.'"/>';
						?>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">Tagline</label>
					<div class="mws-form-item">
						<?php
							echo '<input type="text" name="tagline" class="small" value="'.$tagline.'"/>';
						?>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">Deskripsi</label>
						<div class="mws-form-item clearfix">
	    					<textarea name="deskripsi" rows="auto" cols="auto" class="small"><?php echo $deskripsi; ?></textarea>
	    				</div>
				</div>
			</div>
			<div class="mws-button-row">
				<input type="submit" value="Submit" class="btn btn-danger">
				<input type="reset" value="Reset" class="btn ">
			</div>
		</form>
	</div>
</div>