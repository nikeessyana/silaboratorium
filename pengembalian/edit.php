<!DOCTYPE html>
<html>
<head>
	<title>INVENTORY LAB</title>
</head>
<body>
	<h2>EDIT DATA PEMNGEMBALIAN ASET</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM peminjaman WHERE id_peminjaman ='$id'");
	
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
				<td>ID PEMINJAMAN</td>
				<td>:</td>
				<td><input type="text" name="id_dtl_aset" value="<?php echo $data['id_peminjaman']; ?>" required></td>
			</tr>
			<tr>
				<td>ID PENGGUNA</td>
				<td>:</td>
				<td><input type="text" name="no_seri" size="30" value="<?php echo $data['id_pengguna']; ?>" required></td>
			</tr>
			<tr>
				<td>ID DETAIL ASET</td>
				<td>:</td>
				<td><input type="text" name="merk" size="30" value="<?php echo $data['id_dtl_aset']; ?>" required></td>
			</tr>
			
			<tr>
				<td>WAKTU PINJAM</td>
				<td>:</td>
				<td><input type="text" name="qty" size="30" value="<?php echo $data['waktu_pinjam']; ?>" required></td> 
			</tr>
			<tr>
				<td>WAKTU KEMBALI</td>
				<td>:</td>
				<td><input type="text" name="id_aset" size="30" value="<?php echo $data['waktu_kemballi1']; ?>" required></td> 
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