<?php
session_start(); 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $tid = $_GET['tid'];

 $query = "SELECT * FROM afftithes WHERE tid='$tid'";
 $update = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate Tithe</title>
    <link rel="stylesheet" href="afftithe.css">
</head>
<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../adminboard/adminboard.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/group-2-line.svg"><span>Affiliate Tithes Update.</span></h3>
          </div>
          <div class="right_area">
            <!--<a  href="../settingsphp/settings.php" class="home_btn"><?php //echo $_SESSION['username'];?></a>-->
          </div>
          <div class="right_area">
          <form action="../loginphp/logout.php" method="POST">
            <!--<button name="logout_btn" class="logout_btn">Logout</button>-->
            </form>
          </div>
        </header>
        <br>
        <br>
        <table>
        <?php
                     if (isset($_SESSION['success']) && $_SESSION['success'] !='')
                    {
                        echo '<h2 class="success"> '.$_SESSION['success'].' </h2>';
                        unset($_SESSION['success']);
                    } 
                    if (isset($_SESSION['status']) && $_SESSION['status'] !='')
                    {
                        echo '<h2 class="status"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    } 
                    ?>
            <form method="POST" action="">
            <?php while ($row = mysqli_fetch_array($update)) { ?>
            <div>
              <label hidden>Tithe ID</label><label  class="validation-error hide" required> required </label>
              <input type="hidden" name="tid" id="tid" value="<?php echo $row['tid'];?>">
           </div>
            <div>
              <label>Affiliate No.</label><label  class="validation-error hide" required> required </label>
              <input type="text" name="titheno" id="titheno" value="<?php echo $row['titheno'];?>">
           </div>
           <div>
               <label>First Name</label><label class="validation-error hide" required>This field is required.</label>
               <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname'];?>">
           </div>
           <div>
               <label>Surname</label>
               <input type="text" name="surname" id="surname" value="<?php echo $row['surname'];?>">
           </div>
                                       
                <label>Payment Date</label>
                        <input type="date" name="pdate" id="pdate" value="<?php echo $row['pdate'];?>">
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
                       <select name="pmonth" id="pmonth" value="<?php echo $row['pmonth'];?>">
                           <option value="<?php echo $row['pmonth'];?>"><?php echo $row['pmonth'];?></option>
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
                        <input type="text" name="pamount" id="pamount" value="<?php echo $row['pamount'];?>">
                    </div>
                    <div>
                        <label>Others</label>
                       <select name="others" id="others" value="<?php echo $row['others'];?>">
                           <option value="<?php echo $row['others'];?>"><?php echo $row['others'];?></option>
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
                       <select name="otmonth" id="otmonth" value="<?php echo $row['otmonth'];?>">
                           <option value="<?php echo $row['otmonth'];?>"><?php echo $row['otmonth'];?></option>
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
                        <input type="text" name="otamount" id="otamount" value="<?php echo $row['otamount'];?>">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="changed" type="submit" value="Update">
                    </div>
                    <?php } ?>
                  </form>
             </table>
    </body>
</html>
<?php 
                    if (isset($_POST['changed']))
                    {
                        
                        $tid = $_POST['tid'];
                        $titheno = $_POST['titheno'];
                        $firstname = $_POST['firstname'];
                        $surname = $_POST['surname'];
                        $pdate = $_POST['pdate'];
                        $titype = $_POST['titype'];
                        $pmonth = $_POST['pmonth'];
                        $pamount = $_POST['pamount'];
                        $others = $_POST['others'];
                        $otmonth = $_POST['otmonth'];
                        $otamount = $_POST['otamount'];

                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `afftithes` SET  titheno='$_POST[titheno]',firstname='$_POST[firstname]',surname='$_POST[surname]',pdate='$_POST[pdate]',titype='$_POST[titype]',pmonth='$_POST[pmonth]',pamount='$_POST[pamount]',others='$_POST[others]',otmonth='$_POST[otmonth]',otamount='$_POST[otamount]' WHERE tid='$_POST[tid]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Affilate Tithes Records Updated";
                             header('location:afftithe.php');
                         }else
                         {
                             $_SESSION['status'] ="Tithes Not Updated";
                             header('location:afftithe.php'); 
                         }
                    
                        echo "<script>window.location.href='afftithe.php'</script>";

                    }


                    ?>