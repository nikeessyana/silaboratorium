<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
	
	
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<a><th>PENGGUNA</th></a>
			<a><th>RUANG</th></a>
			<a><th>NAMA LAB</th></a>
			<a><th>WAKTU MASUK</th></a>
			<a><th>WAKTU KELUAR</th></a>
			
		</tr>
		
		<?php
		
		$mysqli = new mysqli("localhost", "root", "", "db_lab");
		$query = mysqli_query($mysqli,"select * from booking_lab");
		if(mysqli_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
				
			while($data = mysqli_fetch_assoc($query)){	
				
					echo '<tr>';
					echo '<td>'.$data['username'].'</td>';	
					echo '<td>'.$data['ruang'].'</td>';	
					echo '<td>'.$data['nama_lab'].'</td>';	
					echo '<td>'.$data['waktu_masuk'].'</td>';
					echo '<td>'.$data['waktu_keluar'].'</td>';	
					
				echo '</tr>';
				
				
				
			}
			
		}
		?>
	</table>
</body>
</html>