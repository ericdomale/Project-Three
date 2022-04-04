<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');



if (isset($_POST['titsubmit']))
{
    $tmid = $_POST['tmid'];
    $firstName = $_POST['firstName'];
    $surname = $_POST['surname'];
    $pdate = $_POST['pdate'];
    $titype = $_POST['titype'];
    $pmonth = $_POST['pmonth'];
    $pamount = $_POST['pamount'];
    $others = $_POST['others'];
    $otmonth = $_POST['otmonth'];
    $otamount = $_POST['otamount'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into tithes (tmid, pdate, titype, pmonth, pamount, others, otmonth, otamount)
     VALUES ('$tmid', '$pdate', '$titype', '$pmonth', '$pamount', '$others', '$otmonth', '$otamount')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        $_SESSION['success'] ="New Tithe Added";
        header('location:tithe.php');
    }else
    {
        $_SESSION['status'] ="New Tithe Not Added";
        header('location:tithe.php'); 

       
    }
}
}
?>
