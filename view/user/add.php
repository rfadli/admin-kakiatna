<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>Add User</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="<?php echo $link; ?>" role="form" method="post" enctype="multipart/form-data">
    	
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">User Name</label>
    				<div class="mws-form-item">
    					<?php
							echo '<input type="text" name="username" class="small" value="'.$username.'"/>';
						?>
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">Password</label>
    				<div class="mws-form-item">
    					<?php
							echo '<input type="password" name="password" class="small" value="'.$password.'"/>';
						?>
    				</div>
    			</div>
    			
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="Submit" class="btn btn-danger">
    			<input type="reset" value="Reset" class="btn ">
    		</div>
    	</form>