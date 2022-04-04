<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$tid = $_GET['tid'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM afftithes WHERE tid = '$tid'");



header("location: afftithe.php");


?>