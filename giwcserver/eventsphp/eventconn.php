<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['eventsubmit']))
{

$eventid = $_POST['eventid'];
$eventname = $_POST['eventname'];
$fdate = $_POST['fdate'];
$todate = $_POST['todate'];
$eventtime = $_POST['eventtime'];
$speakers = $_POST['speakers'];
$eincome = $_POST['eincome'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into events (eventid, eventname, fdate, todate, eventtime, speakers, eincome)
    values('$eventid','$eventname', '$fdate', '$todate', '$eventtime', '$speakers', '$eincome')";
    $queryrun = mysqli_query($conn, $query);

    if ($queryrun)
    {
        $_SESSION['success'] ="New Event Added";
        header('location:event.php');
    }else
    {
        $_SESSION['status'] ="Event Not Added";
        header('location:event.php'); 
    }

 

   
}
}





?>