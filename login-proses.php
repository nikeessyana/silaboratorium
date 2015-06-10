

<?php
session_start();
include 'koneksi.php';
 
if(!empty($_POST)){
     
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "select username and password from pengguna where username='".$username."' and password='".$password."'";
    #echo $sql."<br />";
    $query = mysql_query($sql) or die (mysql_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysql_num_rows($query);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            header('Location: /lab/home.php');
        }else{
            echo "username atau password salah";
        }
    }
}
?>
 
