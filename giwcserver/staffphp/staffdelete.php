<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$staffno = $_GET['staffno'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM staff WHERE staffno = '$staffno'");

header("location: staff.php");


?>