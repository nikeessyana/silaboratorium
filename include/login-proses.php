<?php
	$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_lab";

$con = mysql_connect($host, $user, $pass, $db_name);

	$username=$_POST['username'];
	$password=$_POST['password'];
	if ($username != "" && $password != ""){
		$sql = "select username, password from pengguna where username='$username' and password='$password'";
		$query = mysql_query($con, $sql);
		$ketemu = mysql_num_rows($query);
		if ($ketemu!==1) {
			$lihatUser = mysql_fetch_array($query);
			session_start();
			$_SESSION ["username"]=$username;
			header("location: localhost:81/lab/home.php");
		} else{
			echo "username dan password salah";
		}
	}else{
		echo "dua-duanya harus diisi";
	}
?>