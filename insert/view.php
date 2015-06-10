



<!DOCTYPE html>
<html>

<body>
	
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>ID PENGGUNA</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>NO TELP</th>
			<th>STATUS PENGGUNA</th>
			<th>ALAMAT</th>
			<th>LEVEL</th>
			<th>Edit/Hapus</th>
			
			
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('db.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM pengguna ORDER BY id_pengguna DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					
					echo '<td>'.$data['id_pengguna'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['username'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['password'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['no_telp'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>'.$data['status_pengguna'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['alamat'].'</td>';
					echo '<td>'.$data['level'].'</td>';					//menampilkan data nama lengkap dari database
					
					echo '<td><a href="edit.php?id_pengguna='.$data['id_pengguna'].'">Edit</a> / <a href="delete.php?id_pengguna='.$data['id_pengguna'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				
				
			}
			
		}
		?>
	</table>
</body>
</html>


