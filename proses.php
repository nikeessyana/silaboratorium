

<?php

session_start();
 
mysql_connect("localhost", "root", "");
mysql_select_db("db_lab");



if(isset($_POST['login'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM pengguna WHERE username = '$username'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password']){
		
		if($data['level'] == 1){
			$_SESSION['admin']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="home - admin.php";</script>';
		}else{
			$_SESSION['guest']=$username;
			$idguest = $data['id_pengguna'];
			$_SESSION['idguest']=$idguest;
			echo '<script language="javascript">alert("Anda berhasil Login Guest!"); document.location="home.php";</script>';
		}
	}
	else{
		echo 'User tidak ditemukan';
	}
}
?>