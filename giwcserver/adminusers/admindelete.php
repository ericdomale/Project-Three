<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$adid = $_GET['adid'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM login WHERE adid = '$adid'");



header("location: adminusers.php");


?>
