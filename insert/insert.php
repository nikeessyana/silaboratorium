<?php
 ob_start();
  include("db.php");
  if(isset($_POST['send'])!="")
  {
  $id_pengguna= mysql_real_escape_string($_POST['id_pengguna']);
  $alamat= mysql_real_escape_string($_POST['alamat']);
  $no_telp= mysql_real_escape_string($_POST['no_telp']);
  $status_pengguna= mysql_real_escape_string($_POST['status_pengguna']);
  $nama_pengguna= mysql_real_escape_string($_POST['nama_pengguna']);
  $password= mysql_real_escape_string($_POST['password']);
  $level= mysql_real_escape_string($_POST['level']);
  $update= mysql_query("INSERT INTO pengguna( id_pengguna, alamat, no_telp,status_pengguna, username, password, level )VALUES('$id_pengguna','$alamat','$no_telp','$status_pengguna','$nama_pengguna','$password','$level')");
  
  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:index.php');
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