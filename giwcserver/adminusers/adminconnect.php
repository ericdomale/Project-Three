<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['adsubmit']))
{

$adid = $_POST['adid'];
$username = $_POST['username'];
$password = $_POST['password'];
$cfpassword = $_POST['cfpassword'];



if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    if($password === $cfpassword)
    {
       $passkey = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT into login (adid, username, passkey)
        VALUES('$adid','$username', '$passkey')";

        $queryrun = mysqli_query($conn, $query);

    
    if ($queryrun)
    {
        $_SESSION['success'] ="New Adminuser Created";
        header('location:adminusers.php');
    }else
    {
        $_SESSION['status'] ="Adminuser Not Added";
        header('location:adminusers.php'); 
    }
    }else
    {
        $_SESSION['status'] ="Password Not Matching";
        header('location:adminusers.php'); 
    }

   


}
}



?>