<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $eventid = $_GET['eventid'];

 $query = "SELECT * FROM events WHERE eventid='$eventid'";
 $update = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link rel="stylesheet" href="event.css">

</head>
<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="settings.html"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/calendar-todo-fill.svg"><span>Event Update.</span></h3>
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
                <?php while ($row = mysqli_fetch_array($update)) {
                 ?> 
                     <div>
                       <label hidden>Event ID</label><label class="validation-error hide">This field is required.</label>
                       <input type="hidden" name="eventid" id="eventid" value="<?php echo $row['eventid'];?>">
                    </div>
                   <div>
                       <label>Event Name</label><label class="validation-error hide">This field is required.</label>
                       <input type="text" name="eventname" id="eventname" value="<?php echo $row['eventname'];?>">
                    </div>
                    <div>
                        <label>Date From</label><label class="validation-error hide" id="firstNameValidationError">This field is required.</label>
                        <input type="date" name="fdate" id="fdate" value="<?php echo $row['fdate'];?>">
                    </div>
                    <div>
                        <label>To</label>
                        <input type="date" name="todate" id="todate" value="<?php echo $row['todate'];?>">
                    </div>
                    <div>
                     <div>
                        <label>Event Time</label>
                        <input type="time" name="eventtime" id="eventtime" value="<?php echo $row['eventtime'];?>">
                    </div>
                    <div>
                        <label>Guest Speakers</label>
                        <input type="text" name="speakers" id="speakers" value="<?php echo $row['speakers'];?>">
                    </div>
                    <div>
                        <label>Event Income</label>
                        <input type="text" name="eincome" id="eincome" value="<?php echo $row['eincome'];?>">
                   </div>
                    <div class="form-action-buttons">
                        <input type="submit" name="changed" value="Update">
                    </div>
                    <?php
                         }
                     ?>
                </form>
        </table>
        <?php 
                    if (isset($_POST['changed']))
                    {
                        $eventid = $_POST['eventid'];
                        $eventname = $_POST['eventname'];
                        $fdate = $_POST['fdate'];
                        $todate = $_POST['todate'];
                        $eventtime = $_POST['eventtime'];
                        $speakers = $_POST['speakers'];
                        $eincome = $_POST['eincome'];


                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `events` SET  eventname='$_POST[eventname]',fdate='$_POST[fdate]',todate='$_POST[todate]',eventtime='$_POST[eventtime]',speakers='$_POST[speakers]',eincome='$_POST[eincome]' WHERE eventid='$_POST[eventid]'";
                        $queryrun = mysqli_query($conn,$query);

                        if ($queryrun)
                        {
                            $_SESSION['success'] ="Event Updated";
                            header('location:event.php');
                        }else
                        {
                            $_SESSION['status'] ="Event Not Updated";
                            header('location:event.php'); 
                        }


                        echo "<script>window.location.href='event.php'</script>";



                    }


                    ?>
           
        
</body>
</html>