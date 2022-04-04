<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
$pdgid = $_GET['pdgid'];

$query = "SELECT * FROM pledges WHERE pdgid='$pdgid'";
$update = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pledge Edit</title>
    <link rel="stylesheet" href="pledge.css">
</head>
<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev"   onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="revenue.html"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/medal-fill.svg"><span>Pledge Update.</span></h3>
          </div>
          <div class="right_area">
            <!--<a  href="../settingsphp/settings.php" class="home_btn">Home</a>-->
          </div>
          <div class="right_area">
            <a  href="login.html" class="logout_btn">Logout</a>
          </div>
        </header>
        <br>
        <br>
        <table>
        <form method="POST" action="" autocomplete="off">
        <?php while ($row = mysqli_fetch_array($update)) {?>
                    <div>
                        <label hidden>Pledger ID</label><label class="validation-error hide">This field is required.</label>
                        <input type="hidden" name="pdgid" id="pdgid" value="<?php echo $row['pdgid'];?>">
                    </div>
                    <div>
                        <label>Pledger Name</label><label class="validation-error hide">This field is required.</label>
                        <input type="text" name="pdgname" id="pdgname" value="<?php echo $row['pdgname'];?>">
                    </div>
                    <div>
                        <label>Event/Program</label>
                       <select name="pdgory" id="pdgory" value="<?php echo $row['pdgory'];?>">
                        <option label="<?php echo $row['pdgory'];?>" value="<?php echo $row['pdgory'];?>"><?php echo $row['pdgory'];?></option>
                        <option label="Sunday Service" value="Sunday Service"></option>
                        <option label="Anointing Service" value="Anointing Service"></option>
                        <option label="Thanksgiving Service" value="Thanksgiving Service"></option>
                        <option label="Special Service" value="Special Service"></option>
                       </select>
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" name="pgdate" id="pgdate" value="<?php echo $row['pgdate'];?>">
                    </div>
                    <div>
                        <label>Current Status</label>
                       <select name="pdgstatus" id="pdgstatus" value="<?php echo $row['pdgstatus'];?>">
                           <option label="<?php echo $row['pdgstatus'];?>" value="<?php echo $row['pdgstatus'];?>"><?php echo $row['pdgstatus'];?></option>
                           <option label="Paid" value="Paid"></option>
                           <option label="Unpaid" value="Unpaid"></option>
                       </select>
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="pdgmonth" id="pdgmonth" value="<?php echo $row['pdgmonth'];?>">
                           <option value="<?php echo $row['pdgmonth'];?>"><?php echo $row['pdgmonth'];?></option>
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
                        <label>Amount Pledged</label>
                        <input type="text" name="pdgamount" id="pdgamount" value="<?php echo $row['pdgamount'];?>">
                    </div>
                    <div class="form-action-buttons">
                        <input type="submit" name="changed" value="Update">
                    </div>
                    <?php }?>
                </form>
        </table>
    
</body>
</html>
<?php 
 if (isset($_POST['changed']))
 {
    $pdgid = $_POST['pdgid'];        
    $pdgname = $_POST['pdgname'];
    $pdgory = $_POST['pdgory'];
    $pgdate = $_POST['pgdate'];
    $pdgstatus =$_POST['pdgstatus'];
    $pdgmonth = $_POST['pdgmonth'];
    $pdgamount = $_POST['pdgamount'];


       
     $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
     $query = "UPDATE `pledges` SET  pdgname='$_POST[pdgname]',pdgory='$_POST[pdgory]',pgdate='$_POST[pgdate]',pdgstatus='$_POST[pdgstatus]',pdgmonth='$_POST[pdgmonth]',pdgamount='$_POST[pdgamount]' WHERE pdgid='$_POST[pdgid]'";
     $queryrun = mysqli_query($conn,$query);

     if ($queryrun)
     {
         $_SESSION['success'] ="Pledge Updated";
         header('location:pledge.php');
     }else
     {
         $_SESSION['status'] ="Pledge Not Updated";
         header('location:pledge.php'); 
     }


     echo "<script>window.location.href='pledge.php'</script>";



 }

?>