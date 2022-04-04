<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if(isset($_POST['expsubmit']))
{

$expid = $_POST['expid'];
$expname = $_POST['expname'];
$expgory = $_POST['expgory'];
$expdate = $_POST['expdate'];
$paytm = $_POST['paytm'];
$expmonth = $_POST['expmonth'];
$expamount = $_POST['expamount'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query = "INSERT into expenses (expid, expname, expgory, expdate, paytm, expmonth, expamount)
    values('$expid','$expname', '$expgory', '$expdate', '$paytm', '$expmonth', '$expamount')";

    $queryrun = mysqli_query($conn, $query);

    if ($queryrun)
    {
        $_SESSION['success'] ="New Expense Added";
        header('location:expenses.php');
    }else
    {
        $_SESSION['status'] ="Expense Not Added";
        header('location:expenses.php'); 
    }

 


}

}



