<?php
  ob_start();
  include("db.php");
  if(isset($_GET['id_pengguna'])!="")
  {
  $delete=$_GET['id_pengguna'];
  $delete=mysql_query("DELETE FROM pengguna WHERE id_pengguna='$delete'");
  if($delete)
  {
	  header("Location:index.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>