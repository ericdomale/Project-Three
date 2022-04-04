<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['jointsubmit']))
{


$jid = $_POST['jid'];
$tmid1 = $_POST['tmid1'];
$tmid2 = $_POST['tmid2'];
$jdate = $_POST['jdate'];
$titype = $_POST['titype'];
$jmonth = $_POST['jmonth'];
$jamount = $_POST['jamount'];
$jothers = $_POST['jothers'];
$jotmonth = $_POST['jotmonth'];
$jotamount = $_POST['jotamount'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into joint (jid, tmid1, tmid2, jdate, titype, jmonth, jamount, jothers, jotmonth, jotamount)
    values('$jid', '$tmid1', '$tmid2', '$jdate', '$titype', '$jmonth', '$jamount', '$jothers', '$jotmonth', '$jotamount')";
    $queryrun = mysqli_query($conn,$query);
 
 if ($queryrun)
    {
        $_SESSION['success'] ="New Joint Tithe Added";
        header('location:tithe.php');
    }else
    {
        $_SESSION['status'] ="Joint Tithe Not Added";
        header('location:tithe.php'); 
    }
}
}
?>
