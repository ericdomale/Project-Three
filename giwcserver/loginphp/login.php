<?php
session_start();


$server_name = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name = "giwcdata";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if (!empty($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT * FROM login WHERE username='$username'";
    $query_run = mysqli_query($connection,$query);

    $user = $query_run->fetch_assoc();
   
    if(password_verify($password, $user['passkey']))
    {
        $_SESSION['username'] =$username;
        header('location:../maindashphp/maindash.php');

    }
    else
    {
        $_SESSION['status'] ='Username or Password Not Valid';
        header('location:login.php');
    }
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
</head>
<body>

     <form method="POST">
     <div id="main">
     <?php 
if (isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        echo '<h2 class="status"> '.$_SESSION['status'].' </h2>';
        unset($_SESSION['status']);
    } 
                    ?>
        <div id="title_msg">Welcome.</div>
        <br>
        <img src="IMG-20210113-WA0003.jpg" id="logo"/>
        <div class="container">
           <input type="text" class="inp" name="username" required="required"/>
           <label>Username</label>
           <div id="line"></div>
        </div>


        <div class="container">
           <input type="password" class="inp"  name="password" required="required"/>
           <label>Password</label>
           <div id="line"></div>
        </div>
        <button type="submit" name="login" value="Login">LOGIN.</button>
        <div><a href="../giwcpage/index.html" class="backbtn">Back to website</a></div>
     </form>
   
    
</body>
</html>