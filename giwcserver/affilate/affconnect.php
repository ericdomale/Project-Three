<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','giwcdata');



if (isset($_POST['submit']))
{

$affno = $_POST['affno'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$affdate = $_POST['affdate'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$email = $_POST['email'];
$affmobile = $_POST['affmobile'];
$affaddress = $_POST['affaddress'];
$city = $_POST['city'];
$affsince = $_POST['affsince'];


if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into affilate (affno, firstname, surname, affdate, gender, status, email, affmobile, affaddress, city, affsince)
    values('$affno', '$firstname', '$surname', '$affdate', '$gender', '$status', '$email', '$affmobile', '$affaddress', '$city', '$affsince')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
        $_SESSION['success'] ="New Affilate Added";
        header('location:affilate.php');
    }else
    {
        $_SESSION['status'] ="Affilate Not Added";
        header('location:affilate.php'); 
    }
  

 
}
}


?>

