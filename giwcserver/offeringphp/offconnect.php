<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['offsubmit']))
{

$offid =$_POST['offid'];
$offweek = $_POST['offweek'];
$offdate = $_POST['offdate'];
$offprogram = $_POST['offprogram'];
$offertype = $_POST['offertype'];
$ofamount = $_POST['ofamount'];
$thamount = $_POST['thamount'];



if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query = "INSERT into offerings ( offid, offweek, offdate, offprogram, offertype, ofamount, thamount)
    values('$offid','$offweek', '$offdate', '$offprogram', '$offertype', '$ofamount', '$thamount')";

    $queryrun = mysqli_query($conn, $query);

    if ($queryrun)
    {
        $_SESSION['success'] ="New Record Added";
        header('location:offering.php');
    }else
    {
        $_SESSION['status'] ="Record Not Added";
        header('location:offering.php'); 
    }
  

 


}

}

?>

