<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','giwcdata');



if (isset($_POST['submit']))
{

$memberno = $_POST['memberno'];
$mid = $_POST['mid'];
$firstName = $_POST['firstName'];
$surname = $_POST['surname'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$maddress = $_POST['maddress'];
$paddress = $_POST['paddress'];
$work = $_POST['work'];
$group1 = $_POST['group1'];
$group2 = $_POST['group2'];
$chapel = $_POST['chapel'];
$since = $_POST['since'];


if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into membership (memberno, mid, firstName, surname, date, gender, status, email, mobile, maddress, paddress, work, group1, group2, chapel, since)
    values('$memberno', '$mid', '$firstName', '$surname', '$date', '$gender', '$status', '$email', '$mobile', '$maddress', '$paddress', '$work', '$group1', '$group2', '$chapel', '$since')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
        $_SESSION['success'] ="New Member Added";
        header('location:men.php');
    }else
    {
        $_SESSION['status'] ="New Member Not Added";
        header('location:men.php'); 
    }
  

 
}
}


?>

