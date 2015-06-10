
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_lab";
 
mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db_name) or die (mysql_error());


$con = mysql_connect($host, $user, $pass, $db_name);
if ($con){
echo "tersambung";
}

else { 

echo "gak nyambung";

}
?>