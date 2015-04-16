<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>Table Category</span>
    </div>
    <div class="mws-panel-toolbar">
        <div class="btn-toolbar">
            <div class="btn-group">
            	<a href="#" class="btn"><i class="icol-printer"></i> Print</a>
    		</div>
    		<?php
    		/*if($_SESSION['userid'] == 'rian')
			{
				echo '<a href="/category/add" class="btn btn-danger"></i> Add</a>';
			}
			else
			{
				echo '';
			}*/
    		?>
    		<a href="/category/add" class="btn btn-danger"></i> Add</a>
            </div>
        </div>
    </div>
    <div class="mws-panel-body no-padding">
    <table class="mws-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Title Name</th>
                <th>Keterangan</th>
                <th>Menu</th>
                <th>URL</th>
                <th></th>
            </tr>
          </thead>
        <tbody>
        	<?php
        	foreach($data as $dk)
        	{
        		echo '<tr>';
				echo '<td>'.$dk['name'].'</td>';
				echo '<td>'.$dk['title_menu'].'</td>';
				echo '<td>'.$dk['keterangan'].'</td>';
				echo '<td>'.$dk['menu'].'</td>';
				echo '<td>'.$dk['url_menu'].'</td>';
				echo '<td class="da-icon-column" style="width:80px">';
				echo '<span class="btn-group">';
		        echo '<a href="/category/edit?id='.$dk['_id'].'" class="btn btn-small"><i class="icol-pencil"></i></a> ';
				echo '<a href="/category/delete?id='.$dk['_id'].'" onclick="return confirm(\' Meng Hapus Data '.$dk['name'].' Anda Yakin?\')" class="btn btn-small delete"><i class="icol-cancel"></i></a>';
		        //echo '<a href="#" link="/category/delete?id='.$dk['_id'].'" class="btn btn-small delete" data-name="'.$dk['name'].'"><i class="icol-cancel"></i></a>';
		        echo '</span>';
		        echo '</td>';
				echo '</tr>';
        	}
        	?>
        </tbody>
    </table>
</div>
