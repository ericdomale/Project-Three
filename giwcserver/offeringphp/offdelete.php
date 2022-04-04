<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$offid = $_GET['offid'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM offerings WHERE offid = '$offid'");

header("location: offering.php");


?>