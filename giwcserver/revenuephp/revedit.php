<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $revid = $_GET['revid'];

 $query = "SELECT * FROM revenue WHERE revid='$revid'";
 $update = mysqli_query($conn,$query);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="revenue.css">
</head>
<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="event.html"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/wallet-3-fill.svg"><span>Revenue Update</span></h3>
          </div>
          <div class="right_area">
            <!--<a  href="maindash.html" class="home_btn">Home</a>-->
          </div>
          <div class="right_area">
           <!-- <a  href="login.html" class="logout_btn">Logout</a>-->
          </div>
        </header>
        <br>
        <br>
        <table>
        <form method="POST" action="" autocomplete="off">
         <?php while ($row = mysqli_fetch_array($update)) {?>
                    <div>
                        <label hidden>Revenue ID</label><label  class="validation-error hide" required> required </label>
                        <input type="hidden" name="revid" id="revid" value="<?php echo $row['revid'];?>">
                    </div>
                    <div>
                        <label>Week</label><label class="validation-error hide">This field is required.</label>
                        <input type="week" name="revweek" id="revweek" value="<?php echo $row['revweek'];?>">
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" name="revdate" id="revdate" value="<?php echo $row['revdate'];?>">
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="revmonth" id="revmonth" value="<?php echo $row['revmonth'];?>">
                           <option value="<?php echo $row['revmonth'];?>"><?php echo $row['revmonth'];?></option>
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
                        <label>Revenue Type</label>
                       <select name="revtype" id="revtype" value="<?php echo $row['revtype'];?>">
                           <option label="<?php echo $row['revtype'];?>" value="<?php echo $row['revtype'];?>"></option>
                           <option label="Offering" value="Offering"></option>
                           <option label="Pledges" value="Pledges"></option>
                           <option label="Project Offering" value="Project Offering"></option>
                           <option label="Tithes" value="Tithes"></option>
                           <option label="Sacrifices" value="Sacrifices"></option>
                           <option label="Donations" value="Donations"></option>
                           <option label="Seed Offering" value="Seed Offering"></option>
                           <option label="Others" value="Others"></option>
                       </select>
                    </div>
                    <div>
                        <label>Revenue Amount</label>
                        <input type="text" name="revamount" id="revamount" value="<?php echo $row['revamount'];?>">
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
                        $revid = $_POST['revid'];
                        $revweek = $_POST['revweek'];
                        $revdate = $_POST['revdate'];
                        $revmonth = $_POST['revmonth'];
                        $revtype = $_POST['revtype'];
                        $revamount = $_POST['revamount'];


                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `revenue` SET revweek='$_POST[revweek]',revdate='$_POST[revdate]',revmonth='$_POST[revmonth]',revtype='$_POST[revtype]',revamount='$_POST[revamount]' WHERE revid='$_POST[revid]'";
                        $queryrun = mysqli_query($conn,$query);

                        if ($queryrun)
                        {
                            $_SESSION['success'] ="Revenue Updated";
                            header('location:revenue.php');
                        }else
                        {
                            $_SESSION['status'] ="Revenue Not Updated";
                            header('location:revenue.php'); 
                        }


                        echo "<script>window.location.href='revenue.php'</script>";



                    }


                    ?>
           