<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
if ($conn->connect_error) {
 die("Connection Failed:". $conn->connect_error);
 }

$output = '';
$query = "SELECT * FROM membership WHERE firstName ='".$_POST["MemberNo"]."' ORDER BY surname";
$queryrun = mysqli_query($conn,$query);

$output = '<option>--Select One--</option>';

while($row = mysqli_fetch_array($queryrun))
{
    $output .='<option value="'.$row["mid"].'">'.$row["surname"]. ' - '.$row["mid"].'</option>';
}

echo $output;


?>