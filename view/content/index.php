<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>Table Contet</span>
    </div>
    <div class="mws-panel-toolbar">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a href="#" class="btn"><i class="icol-printer"></i> Print</a>
    		</div>
    		<a href="/content/add?idcategory=<?php echo $idcategory; ?>" class="btn btn-danger"></i> Add</a>
            </div>
        </div>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    </th>
                    <th>Judul</th>
                    <th>Isi Content</th>
                    <th>Status</th>
                    <th>View</th>
                    <th>Image</th>
                    <th>Tag</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            		<?php
            		foreach ($data as $cont)
            		{                           			
	            		echo "<tr>";
						echo "<td>".$cont['judul']."</td>";
						echo "<td>".$cont['isicontent']."</td>";
						echo "<td>".$cont['status']."</td>";
						echo "<td>"."</td>";
						echo '<td width="80" align="center">'.'<img class"thumbnail" src="'.IMAGE_KAKI.$cont['foto'].'" alt="" /><br /><br />'."</td>";
						if(isset($cont['tag']))
						{
							$tt = $cont['tag'];
							echo "<td>";
							foreach ($tt as $key => $value) 
							{
								echo $value.",";
							}
						}
						echo "</td>";
						echo '<td class="da-icon-column" style="width:80px">';
				        echo '<a href="/content/edit?id='.$cont['_id'].'&idcategory='.$cont['category_id'].'" class="btn btn-small"><i class="icol-pencil"></i></a> ';
				        echo '<a href="/content/delete?id='.$cont['_id'].'&idcategory='.$cont['category_id'].'" onclick="return confirm(\' Meng Hapus Data '.$cont['judul'].' Anda Yakin?\')" class="btn btn-small delete"><i class="icol-cancel"></i></a>';
				        echo '</td>';
				        echo '</tr>';
											
						}
					
            		?>
            </tbody>
        </table>
    </div>    	