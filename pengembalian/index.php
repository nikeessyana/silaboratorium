<!DOCTYPE html>
<html>
<head>
	<title>LAB INFORMATIKA</title>
</head>
<body>
	<h2>PENGEMBALIAN ASET</h2>
	
	<a href="/lab/home - admin.php">Beranda</a></p>
	
	<h3>laboratorium unesa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>id_peminjaman</th>
			<th>id_pengguna</th>
			<th>id_dtl_aset</th>
			<th>waktu_pinjam</th>
			<th>waktu_kemballi1</th>
			
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM peminjaman ") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					
					echo '<td>'.$data['id_peminjaman'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['id_pengguna'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['id_dtl_aset'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['waktu_pinjam'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['waktu_kemballi1'].'</td>';	//menampilkan data kelas dari database
				
					echo '<td><a href="edit.php?id='.$data['id_peminjaman'].'">Edit</a> / <a href="hapus.php?id='.$data['id_peminjaman'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				
				
				
			}
			
		}
		?>
		</table>
		
</body>
</html>