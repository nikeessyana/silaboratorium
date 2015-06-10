<!DOCTYPE html>
<html>
<head>
	<title>INFORMATIKA</title>
</head>
<body>
	<h2>DATA ASET</h2>
	
	<p><a href="tambah.php">Tambah Data</a> / <a href="/lab/home - admin.php">Beranda</a></p>
	
	<h3>laboratorium unesa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>id_dtl_aset</th>
			<th>no_seri</th>
			<th>merk</th>
			<th>sumber_dana</th>
			<th>nama_aset</th>
			<th>qty</th>
			<th>id_aset</th>
			<th>spec</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM detail_aset ORDER BY id_dtl_aset DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					
					echo '<td>'.$data['id_dtl_aset'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['no_seri'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['merk'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['sumber_dana'].'</td>';	//menampilkan data jurusan dari database
					echo '<td>'.$data['nama_aset'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['qty'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['id_aset'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['spec'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="edit.php?id='.$data['id_dtl_aset'].'">Edit</a> / <a href="hapus.php?id_dtl_aset='.$data['id_dtl_aset'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				
				
				
			}
			
		}
		?>
		</table>
		
</body>
</html>