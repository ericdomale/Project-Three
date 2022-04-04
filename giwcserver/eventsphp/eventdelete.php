<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$eventname = $_GET['eventname'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM events WHERE eventname = '$eventname'");

header("location: event.php");
?>