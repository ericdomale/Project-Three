<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$revweek = $_GET['revweek'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM revenue WHERE revweek = '$revweek'");

header("location: revenue.php");


?>