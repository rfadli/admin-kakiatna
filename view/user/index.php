<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>Table User</span>
    </div>
    <div class="mws-panel-toolbar">
        <div class="btn-toolbar">
            <div class="btn-group">
            	<a href="#" class="btn"><i class="icol-printer"></i> Print</a>
    		</div>
    			<a href="/user/add" class="btn btn-danger"></i> Add</a>
            </div>
        </div>
    </div>
    <div class="mws-panel-body no-padding">
    <table class="mws-table">
        <thead>
            <tr>
                <th border="1" style="width:70%">Username</th>
                <th></th>
            </tr>
          </thead>
        <tbody>
        	<?php
        	foreach($data as $dk)
        	{
        		echo '<tr>';
				echo '<td>'.$dk['username'].'</td>';
				echo '<td>';
				echo '<center>';
		        echo '<a href="/user/edit?id='.$dk['_id'].'" class="btn btn-small"><i class="icol-pencil"></i></a> ';
				echo '<a href="/user/delete?id='.$dk['_id'].'" onclick="return confirm(\' Meng Hapus Data '.$dk['username'].' Anda Yakin?\')" class="btn btn-small delete"><i class="icol-cancel"></i></a>';
		        //echo '<a href="#" link="/user/delete?id='.$dk['_id'].'" class="btn btn-small delete" data-name="'.$dk['username'].'"><i class="icol-cancel"></i></a>';
		        echo '</center>';
		        echo '</td>';
				echo '</tr>';
        	}
        	?>
        </tbody>
    </table>
</div>