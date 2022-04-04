<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = new mysqli('127.0.0.1:3307','root','','giwcdata');

if(isset($_POST['expsubmit']))
{

$expdate = $_POST['expdate'];
$expmonth = $_POST['expmonth'];
$expname = $_POST['expname'];
$expgory = $_POST['expgory'];
$paytm = $_POST['paytm'];
$expamount = $_POST['expamount'];


if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    foreach( $expname AS $key => $value)
    {
       

        $s_expname = $value;
        $s_expgory = $expgory[$key];
        $s_paytm = $paytm[$key];
        $s_expamount = $expamount[$key];

       
        
        $query = "INSERT into expenses (expdate, expmonth, expname, expgory, paytm, expamount)
        values('$expdate', '$expmonth', '$s_expname', '$s_expgory', '$s_paytm', '$s_expamount')";

        
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

}





?>