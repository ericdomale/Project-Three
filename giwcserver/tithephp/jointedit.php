<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $jid = $_GET['jid'];

 $query = "SELECT * FROM joint WHERE jid='$jid'";
 $update = mysqli_query($conn,$query);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Tithe</title>
    <link rel="stylesheet" href="tithe.css">
</head>
<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../adminboard/adminboard.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/account-pin-circle-line.svg"><span>Joint Tithe Update.</span></h3>
          </div>
          <div class="right_area">
           <!--<a  href="../settingsphp/settings.php" class="home_btn">Home</a>-->
          </div>
          <div class="right_area">
            <!--<a  href="../loginphp/login.php" class="logout_btn">Logout</a>-->
          </div>
        </header>
        <br>
        <br>
        <table>
            <form method="POST" action="">
            <?php while ($row = mysqli_fetch_array($update)) { ?>
                <div>
              <label hidden>Tithe ID</label><label  class="validation-error hide" required> required </label>
              <input type="hidden" name="jid" id="jid" value="<?php echo $row['jid'];?>">
           </div>
            <div>
              <label>Joint No.</label><label  class="validation-error hide" required> required </label>
              <input type="text" name="tmid1" id="tmid2" value="<?php echo $row['firstName'];?>">
           </div>
           <div>
               <label>Joint Name</label><label class="validation-error hide" required>This field is required.</label>
               <input type="text" name="jointname" id="jointname" value="<?php echo $row['jointname'];?>">
           </div>                      
                <label>Payment Date</label>
                        <input type="date" name="jdate" id="jdate" value="<?php echo $row['jdate'];?>">
                    </div>
                    <div>
                        <label>Tithe Type</label>
                       <select name="titype" id="titype" value="<?php echo $row['titype'];?>">
                       <option value="<?php echo $row['titype'];?>"><?php echo $row['titype'];?></option>
                           <option value="Personal">Personal</option>
                           <option label="Company" value="Company"></option>
                           <option label="N/A" value="N/A"></option>
                       </select>
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="jmonth" id="jmonth" value="<?php echo $row['jmonth'];?>">
                           <option value="<?php echo $row['jmonth'];?>"><?php echo $row['jmonth'];?></option>
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
                        <label>Amount Paid</label>
                        <input type="text" name="jamount" id="jamount" value="<?php echo $row['jamount'];?>">
                    </div>
                    <div>
                        <label>Others</label>
                       <select name="jothers" id="jothers" value="<?php echo $row['jothers'];?>">
                           <option value="<?php echo $row['jothers'];?>"><?php echo $row['jothers'];?></option>
                           <option value="Pledge">Pledge</option>
                           <option label="Project Offering" value="Project Offering"></option>
                           <option label="Donation" value="Donation"></option>
                           <option label="Seed Offering" value="Seed Offering"></option>
                           <option label="First Fruit" value="First Fruit"></option>
                           <option label="Thanksgiving" value="Thanksgiving"></option>
                           <option label="Sacrifice Offering" value="Sacrifice Offering"></option>
                           <option label="N/A" value="N/A"></option>
                       </select>
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="jotmonth" id="jotmonth" value="<?php echo $row['jotmonth'];?>">
                           <option value="<?php echo $row['jotmonth'];?>"><?php echo $row['jotmonth'];?></option>
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
                        <label>Amount Paid</label>
                        <input type="text" name="jotamount" id="jotamount" value="<?php echo $row['jotamount'];?>">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="changed" type="submit" value="Update">
                    </div>
                    <br>
                    <?php } ?>
    </form>
</table>
<?php 
                    if (isset($_POST['changed']))
                    {
                        $jid = $_POST['jid'];
                        $jointno = $_POST['jointno'];
                        $jointname = $_POST['jointname'];
                        $jdate = $_POST['jdate'];
                        $titype = $_POST['titype'];
                        $jmonth = $_POST['jmonth'];
                        $jamount = $_POST['jamount'];
                        $jothers = $_POST['jothers'];
                        $jotmonth = $_POST['jotmonth'];
                        $jotamount = $_POST['jotamount'];
                      
                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `joint` SET  jointno='$_POST[jointno]',jointname='$_POST[jointname]',jdate='$_POST[jdate]',titype='$_POST[titype]',jmonth='$_POST[jmonth]',jamount='$_POST[jamount]',jothers='$_POST[jothers]',jotmonth='$_POST[jotmonth]',jotamount='$_POST[jotamount]' WHERE jid='$_POST[jid]'";
                        $queryrun = mysqli_query($conn,$query);

                        if ($queryrun)
                        {
                            $_SESSION['success'] ="Joint Tithe Updated";
                            header('location:tithe.php');
                        }else
                        {
                            $_SESSION['status'] ="Joint Tithe Not Updated";
                            header('location:tithe.php'); 
                        }

                        echo "<script>window.location.href='tithe.php'</script>";



                    }


                    ?>