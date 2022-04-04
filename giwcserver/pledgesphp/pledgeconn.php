<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['pdgsubmit']))
{

$pdgid = $_POST['pdgid'];
$pdgname = $_POST['pdgname'];
$pdgory = $_POST['pdgory'];
$pgdate = $_POST['pgdate'];
$pdgstatus =$_POST['pdgstatus'];
$pdgmonth = $_POST['pdgmonth'];
$pdgamount = $_POST['pdgamount'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query = "INSERT into pledges (pdgid, pdgname, pdgory, pgdate, pdgstatus, pdgmonth, pdgamount)
    values('$pdgid', '$pdgname', '$pdgory', '$pgdate', '$pdgstatus', '$pdgmonth', '$pdgamount')";

    $queryrun = mysqli_query($conn, $query);

    if ($queryrun)
    {
        $_SESSION['success'] ="New Pledge Added";
        header('location:pledge.php');
    }else
    {
        $_SESSION['status'] ="New Pledge Not Added";
        header('location:pledge.php'); 
    }


    
}
}





?>