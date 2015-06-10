<?php 
ob_start();
include('db.php');
if(isset($_GET['id_pengguna']))
{
  $id_pengguna=$_GET['id_pengguna'];
  if(isset($_POST['update']))
  {

	$ealamat=$_POST['ealamat'];
	$eno_telp=$_POST['eno_telp'];
	$estatus_pengguna=$_POST['estatus_pengguna'];
	$enama_pengguna=$_POST['enama_pengguna'];
	$epassword=$_POST['epassword'];
 
  $updated=mysql_query("UPDATE pengguna SET 
		 alamat='$ealamat', no_telp='$eno_telp', status_pengguna='$estatus_pengguna', nama_pengguna='$enama_pengguna', password='$epassword' WHERE id_pengguna='$id_pengguna'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:index.php');
  }
}
}
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php 
  if(isset($_GET['id_pengguna']))
  {
  $id_pengguna=$_GET['id_pengguna'];
  $getselect=mysql_query("SELECT * FROM pengguna WHERE id_pengguna='$id_pengguna'");
  while($profile=mysql_fetch_array($getselect))
  {
 
	
	$alamat=$profile['alamat'];
	$no_telp=$profile['no_telp'];
	$status_pengguna=$profile['status_pengguna'];
	$nama_pengguna=$profile['nama_pengguna'];
	$password=$profile['password'];
 
	
	
?>
<div class="display">
  <form action="" method="post" name="insertform">
    
    <p>
      <label  for="alamat"  id="preinput"> ALAMAT : </label>
      <input type="text" name="ealamat" required placeholder="Enter your alamat" 
      value="<?php echo $alamat; ?>" id="inputid" />
    </p>
    <p>
      <label for="no_telp" id="preinput"> TLP : </label>
      <input type="text" name="eno_telp" required placeholder="Enter your no telp" 
      value="<?php echo $no_telp; ?>" id="inputid" />
    </p>
	<p>
      <label for="status_pengguna"  id="preinput"> STATUS : </label>
      <input type="text" name="estatus_pengguna" required placeholder="Enter your status" 
      value="<?php echo $status_pengguna; ?>" id="inputid" />
    </p>
	<p>
      <label for="nama_pengguna"  id="preinput"> nama_pengguna : </label>
      <input type="text" name="enama_pengguna" required placeholder="Enter your nama" 
      value="<?php echo $nama_pengguna; ?>" id="inputid" />
    </p>
	
	<p>
      <label for="password"  id="preinput"> password : </label>
      <input type="text" name="epassword" required placeholder="Enter your password" 
      value="<?php echo $password; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Update" id="inputid" />
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>