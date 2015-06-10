<?php

	

	$mysqli = new mysqli("localhost", "root", "", "db_lab");
	
	
	$id_pengguna=$_POST['id_pengguna'];
	$id_dtl_aset=$_POST['id_dtl_aset'];
	$waktu_pinjam=$_POST['waktu_pinjam'];
	$waktu_kembali=$_POST['waktu_kembali'];
	
	
	
	
	if ($id_pengguna != "" && $id_dtl_aset != "" && $waktu_pinjam != "" && $waktu_kembali != "" ){
		$sql = "INSERT INTO peminjaman( id_pengguna, id_dtl_aset, waktu_pinjam, waktu_kembali) VALUES('$id_pengguna', '$id_aset', '$waktu_pinjam', '$waktu_kembali')";
		$query = mysqli_query($mysqli, $sql);
		if ($query) {
			
			echo 'Data berhasil di tambahkan! ';
			header("location:home.php");
		} else{
			echo "kesalahan pemasukan data";
		}
	}else{
		echo "Isilah dengan lengkap";
	}
?>