<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $staffno = $_GET['staffno'];

 $query = "SELECT * FROM staff WHERE staffno='$staffno'";
 $update = mysqli_query($conn,$query);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="staff.css">
</head>
<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="tithe.html"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/team-fill.svg"><span>Staff Update.</span></h3>
          </div>
          <div class="right_area">
            <!--<a  href="settings.html" class="home_btn">Home</a>-->
          </div>
          <div class="right_area">
            <!--<a  href="login.html" class="logout_btn">Logout</a>-->
          </div>
 </header>
  <br>
  <br>
  <table>
  <form method="POST" action="" autocomplete="off">
  <?php while ($row = mysqli_fetch_array($update)) { ?>
    <td>
    <div>
                       <label hidden>Staff No.</label><label class="validation-error hide">This field is required.</label>
                       <input type="hidden" name="staffno" id="staffno" value="<?php echo $row['staffno'];?>">
                    </div>
                    <div>
                        <label>First Name</label><label class="validation-error hide">This field is required.</label>
                        <input type="text" name="stfname" id="stfname" value="<?php echo $row['stfname'];?>">
                    </div>
                    <div>
                        <label>Surname</label>
                        <input type="text" name="surname" id="surname" value="<?php echo $row['surname'];?>">
                    </div>
                    <div>
                     <div>
                        <label>D.O.B</label>
                        <input type="date" name="stfdate" id="stfdate" value="<?php echo $row['stfdate'];?>">
                    </div>
                    <div>
                        <label>Gender</label>
                       <select name="gender" id="gender" value="<?php echo $row['gender'];?>">
                           <option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
                           <option label="Male" value="Male"></option>
                           <option label="Female" value="Female"></option>
                       </select>
                    </div>
                    <div>
                        <label>Status</label>
                       <select name="status" id="status" value="<?php echo $row['status'];?>">
                           <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                           <option label="Married" value="Married"></option>
                           <option label="Divorced" value="Divorced"></option>
                           <option label="Widow" value="Widow"></option>
                           <option label="Widower" value="Widower"></option>
                       </select>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="stfemail" id="stfemail" value="<?php echo $row['stfemail'];?>">
                    </div>
                    <div>
                        <label>Contact No.</label>
                        <input type="number" name="stfmobile" id="stfmobile" value="<?php echo $row['stfmobile'];?>">
                    </div>
                    <div>
                              <label>Address</label>
                              <input type="text" name="stfaddress" id="stfaddress" value="<?php echo $row['stfaddress'];?>">
                          </div>
                    <div>
                        <label>City</label>
                        <input type="text" name="stfcity" id="stfcity" value="<?php echo $row['stfcity'];?>">
                    </div>
                    <div>
                        <label>Job Description</label>
                        <input type="text" name="jobdesc" id="jobdesc" value="<?php echo $row['jobdesc'];?>">
                    </div>
                    <div>
                        <label>Chapel Group</label>
                       <select name="chapel" id="chapel" value="<?php echo $row['chapel'];?>">
                           <option value="<?php echo $row['chapel'];?>"><?php echo $row['chapel'];?></option>
                           <option value="Faith Chapel">Faith Chapel</option>
                           <option label="Love Chapel" value="Love Chapel"></option>
                           <option label="Joy Chapel" value="Joy Chapel"></option>
                           <option label="Grace Chapel" value="Grace Chapel"></option>
                       </select>
                    </div>
                    <div>
                        <label>Employed Since</label>
                        <input type="date" name="empsince" id="empsince" value="<?php echo $row['empsince'];?>">
                    </div>
                    <div class="form-action-buttons">
                        <input type="submit"  name="changed" value="Update">
                    </div>
    </td>
                   
                    <?php } ?>
                </form>
  </table>
    
</body>
</html>
<?php if (isset($_POST['changed']))
                    {
                        
                        $staffno = $_POST['staffno'];
                        $stfname = $_POST['stfname'];
                        $surname = $_POST['surname'];
                        $stfdate = $_POST['stfdate'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
                        $stfemail = $_POST['stfemail'];
                        $stfmobile = $_POST['stfmobile'];
                        $stfaddress =$_POST['stfaddress'];
                        $stfcity = $_POST['stfcity'];
                        $jobdesc = $_POST['jobdesc'];
                        $chapel = $_POST['chapel'];
                        $empsince = $_POST['empsince'];

                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `staff` SET  staffno='$_POST[staffno]',stfname='$_POST[stfname]',surname='$_POST[surname]',gender='$_POST[gender]',stfdate='$_POST[stfdate]',status='$_POST[status]',stfemail='$_POST[stfemail]',stfmobile='$_POST[stfmobile]',stfaddress='$_POST[stfaddress]',stfcity='$_POST[stfcity]',jobdesc='$_POST[jobdesc]',chapel='$_POST[chapel]',empsince='$_POST[empsince]' WHERE staffno='$_POST[staffno]'";
                        $queryrun = mysqli_query($conn,$query);

                        if ($queryrun)
                        {
                            $_SESSION['success'] ="Staff Records Updated";
                            header('location:staff.php');
                        }else
                        {
                            $_SESSION['status'] ="Records Not Updated";
                            header('location:staff.php'); 
                        }

                        echo "<script>window.location.href='staff.php'</script>";



                    }


                    ?>