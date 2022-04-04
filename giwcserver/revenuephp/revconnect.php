<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['revsubmit']))
{

$revid = $_POST['revid'];
$revweek = $_POST['revweek'];
$revdate = $_POST['revdate'];
$revmonth = $_POST['revmonth'];
$revtype = $_POST['revtype'];
$revamount = $_POST['revamount'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query = "INSERT into revenue (revid, revweek, revdate, revmonth, revtype, revamount)
    values('$revid','$revweek', '$revdate', '$revmonth', '$revtype', '$revamount')";

   $queryrun = mysqli_query($conn, $query);

   
   if ($queryrun)
   {
       $_SESSION['success'] ="New Revenue Added";
       header('location:revenue.php');
   }else
   {
       $_SESSION['status'] ="Revenue Not Added";
       header('location:revenue.php'); 
   }


}
}



?>