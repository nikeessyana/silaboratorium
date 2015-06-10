<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM detail_aset WHERE id_dtl_aset='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>id_dtl_aset</td>
				<td>:</td>
				<td><input type="text" name="id_dtl_aset" value="<?php echo $data['id_dtl_aset']; ?>" required></td>
			</tr>
			<tr>
				<td>no_seri</td>
				<td>:</td>
				<td><input type="text" name="no_seri" size="30" value="<?php echo $data['no_seri']; ?>" required></td>
			</tr>
			<tr>
				<td>merk</td>
				<td>:</td>
				<td><input type="text" name="merk" size="30" value="<?php echo $data['merk']; ?>" required></td>
			</tr>
			<tr>
				<td>sumber_dana</td>
				<td>:</td>
				<td><input type="text" name="sumber_dana" size="30" value="<?php echo $data['sumber_dana']; ?>" required></td> 
			</tr>
			<tr>
				<td>nama_aset</td>
				<td>:</td>
				<td><input type="text" name="nama_aset" value="<?php echo $data['nama_aset']; ?>" required></td>	
			</tr>
			<tr>
				<td>qty</td>
				<td>:</td>
				<td><input type="text" name="qty" size="30" value="<?php echo $data['qty']; ?>" required></td> 
			</tr>
			<tr>
				<td>id_aset</td>
				<td>:</td>
				<td><input type="text" name="id_aset" size="30" value="<?php echo $data['id_aset']; ?>" required></td> 
			</tr>
			<tr>
				<td>spec</td>
				<td>:</td>
				<td><input type="text" name="spec" size="30" value="<?php echo $data['spec']; ?>" required></td> 
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>