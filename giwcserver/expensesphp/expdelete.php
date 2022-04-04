<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$expid = $_GET['expid'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM expenses WHERE expid = '$expid'");

header("location: expenses.php");
?>