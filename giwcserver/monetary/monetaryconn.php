<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if (isset($_POST['monsubmit']))
{

$monid =$_POST['monid'];
$monweek = $_POST['monweek'];
$mondate = $_POST['mondate'];
$monetmonth = $_POST['monetmonth'];
$montype = $_POST['montype'];
$monprogram = $_POST['monprogram'];
$monamount = $_POST['monamount'];



if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query = "INSERT into monetary ( monid, monweek, mondate, monetmonth, montype, monprogram, monamount)
    values('$monid','$monweek', '$mondate', '$monetmonth', '$montype', '$monprogram', '$monamount')";

    $queryrun = mysqli_query($conn, $query);

    if ($queryrun)
    {
        $_SESSION['success'] ="New Record Added";
        header('location:monetary.php');
    }else
    {
        $_SESSION['status'] ="Record Not Added";
        header('location:monetary.php'); 
    }
  

 


}

}

?>

