<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['stfsubmit']))
{

$staffno = $_POST['staffno'];
$stfname = $_POST['stfname'];
$surname = $_POST['surname'];
$stfdate = $_POST['stfdate'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$stfemail = $_POST['stfemail'];
$stfmobile = $_POST['stfmobile'];
$stfaddress =$_POST['stfaddress'];
$stfcity = $_POST['stfcity'];
$jobdesc = $_POST['jobdesc'];
$chapel = $_POST['chapel'];
$empsince = $_POST['empsince'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $query = "INSERT into staff (staffno, stfname, surname, stfdate, gender, status, stfemail, stfmobile, stfaddress, stfcity, jobdesc, chapel, empsince)
    values('$staffno', '$stfname', '$surname', '$stfdate', '$gender', '$status', '$stfemail', '$stfmobile', '$stfaddress', '$stfcity', '$jobdesc', '$chapel', '$empsince')";
    $queryrun = mysqli_query($conn, $query);


if ($queryrun)
{
    $_SESSION['success'] ="New Staff Worker Added";
    header('location:staff.php');
    header('Refresh:1');
}else
{
    $_SESSION['status'] ="Staff Worker Not Added";
    header('location:staff.php'); 
}
}
}

?>