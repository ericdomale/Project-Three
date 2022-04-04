<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
} 
$pdgname = $_GET['pdgname'];

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');
mysqli_query($conn, "DELETE FROM pledges WHERE pdgname = '$pdgname'");

header("location: pledge.php");
?>