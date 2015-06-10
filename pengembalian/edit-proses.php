<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	
	
	$id_dtl_aset	= $_POST['id_peminjaman'];
	$no_seri		= $_POST['id_pengguna'];	
	$merk			= $_POST['id_dtl_aset'];	
	
	$qty			= $_POST['waktu_pinjam'];	
	$id_aset		= $_POST['waktu_kemballi1'];	
	
	

	$update = mysql_query("UPDATE * FROM peminjaman SET id_peminjaman='$id_dtl_aset', id_pengguna='$no_seri', id_dtl_aset='$merk', waktu_pinjam='$qty', waktu_kemballi1='$id_aset' WHERE id_peminjaman ='$id_dtl_aset'") or die(mysql_error());
	
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="index.php?id='.$id_dtl_aset.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit.php?id='.$id_dtl_aset.'">Kembali</a>';	
		
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>