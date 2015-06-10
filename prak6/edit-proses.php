<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	
	
	$id_dtl_aset	= $_POST['id_dtl_aset'];
	$no_seri		= $_POST['no_seri'];	
	$merk			= $_POST['merk'];	
	$sumber_dana	= $_POST['sumber_dana'];
	$nama_aset		= $_POST['nama_aset'];	
	$qty			= $_POST['qty'];	
	$id_aset		= $_POST['id_aset'];	
	$spec			= $_POST['spec'];	
	

	$update = mysql_query("UPDATE detail_aset SET id_dtl_aset='$id_dtl_aset', no_seri='$no_seri', merk='$merk', sumber_dana='$sumber_dana',  nama_aset='$nama_aset', qty='$qty', id_aset='$id_aset', spec='$spec' WHERE id_dtl_aset='$id_dtl_aset'") or die(mysql_error());
	
	
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