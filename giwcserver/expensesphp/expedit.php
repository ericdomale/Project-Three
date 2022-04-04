<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $expid = $_GET['expid'];

 $query = "SELECT * FROM expenses WHERE expid='$expid'";
 $update = mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Expenses
    </title>
    <link rel="stylesheet" href="expenses.css">
</head>

<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev"   onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="revenue.html"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/coins-fill.svg"><span>Expense Update.</span></h3>
          </div>
          <div class="right_area">
            <!--<a  href="maindash.html" class="home_btn">Home</a>-->
          </div>
          <div class="right_area">
            <!--<a  href="login.html" class="logout_btn">Logout</a>-->
          </div>
        </header>
        <br>
        <br>
        <table>
          <form method="POST" action="" autocomplete="off">
          <?php while ($row = mysqli_fetch_array($update)) {?>
                    <div>
                        <label hidden>Expense ID</label><label  class="validation-error hide" required> required </label>
                         <input type="hidden" name="expid" id="expid" value="<?php echo $row['expid'];?>">
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" name="expdate" id="expdate" value="<?php echo $row['expdate'];?>">
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="expmonth" id="expmonth" value="<?php echo $row['expmonth'];?>">
                           <option value="<?php echo $row['expmonth'];?>"><?php echo $row['expmonth'];?></option>
                           <option value="January">January</option>
                           <option label="February" value="February"></option>
                           <option label="March" value="March"></option>
                           <option label="April" value="April"></option>
                           <option label="May" value="May"></option>
                           <option label="June" value="June"></option>
                           <option label="July" value="July"></option>
                           <option label="August" value="August"></option>
                           <option label="September" value="September"></option>
                           <option label="October" value="October"></option>
                           <option label="November" value="November"></option>
                           <option label="December" value="December"></option>
                       </select>
                    </div>
                    <div>
                        <label>Expense Name</label><label class="validation-error hide">This field is required.</label>
                        <input type="text" name="expname" id="expname" value="<?php echo $row['expname'];?>">
                    </div>
                    <div>
                        <label>Expense Category</label>
                       <select name="expgory" id="expgory" value="<?php echo $row['expgory'];?>">
                           <option label="<?php echo $row['expgory'];?>" value="<?php echo $row['expgory'];?>"></option>
                           <option label="Fuel" value="Fuel"></option>
                           <option label="Sundry" value="Sundry"></option>
                           <option label="Salaries" value="Salaries"></option>
                           <option label="Internet" value="Internet"></option>
                           <option label="Air Condition" value="Air Condition"></option>
                           <option label="Office Stationery" value="Office Stationery"></option>
                           <option label="General Maintenance" value="General Maintenance"></option>
                           <option label="Communion" value="Communion"></option>
                           <option label="Phone Bills" value="Phone Bills"></option>
                           <option label="Water" value="Water"></option>
                           <option label="Others" value="Others"></option>
                       </select>
                    </div>
                    <div>
                        <label>Payment Method</label>
                       <select name="paytm" id="paytm" value="<?php echo $row['paytm'];?>">
                           <option label="<?php echo $row['paytm'];?>" value="<?php echo $row['paytm'];?>"></option>
                           <option label="Cash" value="Cash"></option>
                           <option label="Mobile Money" value="Mobile Money"></option>
                           <option label="Bank Transfer" value="Bank Transfer"></option>
                           <option label="Debit Card" value="Debit Card"></option>
                           <option label="Bank Deposit" value="Bank Deposit"></option>
                       </select>
                    </div>
                   
                    <div>
                        <label>Expense Amount</label>
                        <input type="text" name="expamount" id="expamount" value="<?php echo $row['expamount'];?>">
                    </div>
                    <div class="form-action-buttons">
                        <input type="submit" name="changed" value="Update">
                    </div>
                    <?php }?>
                </form>
        </table>
        <?php 
          if (isset($_POST['changed']))
            {
                $expid = $_POST['expid'];       
                $expname = $_POST['expname'];
                $expgory = $_POST['expgory'];
                $expdate = $_POST['expdate'];
                $paytm = $_POST['paytm'];
                $expmonth = $_POST['expmonth'];
                $expamount = $_POST['expamount'];


                  
                $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                $query = "UPDATE `expenses` SET  expid='$_POST[expid]',expname='$_POST[expname]',expgory='$_POST[expgory]',expdate='$_POST[expdate]',paytm='$_POST[paytm]',expmonth='$_POST[expmonth]',expamount='$_POST[expamount]' WHERE expid='$_POST[expid]'";
                $queryrun = mysqli_query($conn,$query);

                if ($queryrun)
                {
                    $_SESSION['success'] ="Expense Updated";
                    header('location:expenses.php');
                }else
                {
                    $_SESSION['status'] ="Expense Not Updated";
                    header('location:expenses.php'); 
                }


                echo "<script>window.location.href='expenses.php'</script>";



            }


                    ?>
           
        
