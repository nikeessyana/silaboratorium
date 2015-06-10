<?php
 ob_start();
  include("db.php");
  if(isset($_POST['send'])!="")
  {
  $id_pengguna= mysql_real_escape_string($_POST['id_pengguna']);
  $id_lab= mysql_real_escape_string($_POST['id_lab']);
  $waktu_masuk= mysql_real_escape_string($_POST['waktu_masuk']);
  $waktu_keluar= mysql_real_escape_string($_POST['waktu_keluar']);
  
	$update= mysql_query("INSERT INTO jadwal( id_pengguna, id_lab, waktu_masuk,waktu_keluar )VALUES('$id_pengguna','$id_lab', '$waktu_masuk','$waktu_keluar')");
	$tes= mysql_query("select * from jadwal( id_pengguna, id_lab, waktu_masuk,waktu_keluar )VALUES('$id_pengguna','$id_lab', '$waktu_masuk','$waktu_keluar')"); 
	$data = mysql_fetch_array($tes);
	
  if($update)
  {
	  
	  {
	  
	  echo 'Successfully Updated!!';
	  header("Location:/lab/home.php");}
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "<script type='text/javascript'>alert('$errormsg');</script>";
	  header('Location:index.php');
  }
  }
 ob_end_flush();
?>