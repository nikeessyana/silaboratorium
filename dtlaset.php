<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
	
	
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<a><th>NO.</th></a>
			<a><th>NO. SERI</th></a>
			<a><th>MERK</th></a>
			<a><th>NAMA ASET</th></a>
			<a><th>KUANTITAS</th></a>
			<a><th>SPESIFIKASI</th></a>			
		</tr>
		
		<?php
		
		$mysqli = new mysqli("localhost", "root", "", "db_lab");
		$query = mysqli_query($mysqli,"select * from detail_aset");
		if(mysqli_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
				
			while($data = mysqli_fetch_assoc($query)){	
				
					echo '<tr>';
					echo '<td>'.$data['id_dtl_aset'].'</td>';	
					echo '<td>'.$data['no_seri'].'</td>';	
					echo '<td>'.$data['merk'].'</td>';	
					echo '<td>'.$data['nama_aset'].'</td>';
					echo '<td>'.$data['qty'].'</td>';	
					echo '<td>'.$data['spec'].'</td>';
					
				echo '</tr>';
				
				
				
			}
			
		}
		?>
	</table>
</body>
</html>