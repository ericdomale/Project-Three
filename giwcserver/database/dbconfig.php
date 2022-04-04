<?php 

$server_name = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name = "mossystem";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
// echo "Database Connected";
}
else
{
 echo "Database Connection Failed";
}



?>
