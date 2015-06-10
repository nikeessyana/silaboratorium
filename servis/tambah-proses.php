<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
		//membuat variabel $nis dan datanya dari inputan NIS
	$id_dtl_aset	= $_POST['id_dtl_aset'];
	$no_seri		= $_POST['no_seri'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$merk			= $_POST['merk'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$sumber_dana	= $_POST['sumber_dana'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$nama_aset		= $_POST['nama_aset'];	//membuat variabel $nis dan datanya dari inputan NIS
	$qty			= $_POST['qty'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$id_aset		= $_POST['id_aset'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$spec			= $_POST['spec'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO detail_aset VALUES($id_dtl_aset,'$no_seri', '$merk', '$sumber_dana', '$nama_aset', '$qty', '$id_aset', '$spec')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="index.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>