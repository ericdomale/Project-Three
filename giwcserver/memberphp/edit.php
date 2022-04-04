<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $memberno = $_GET['memberno'];

 $query = "SELECT * FROM membership WHERE memberno='$memberno'";
 $update = mysqli_query($conn,$query);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
<header>
        <div class="left_area">
           <!--<h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="offering.html"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/account-pin-box-fill.svg"><span>Member Update.</span></h3>
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
                    <form  action="" method="POST">
                         <?php while ($row = mysqli_fetch_array($update)) { ?>
                             <td>
                             <div>
                                 <label hidden> No.</label><label  class="validation-error hide" required> required </label>
                                 <input type="hidden" name="memberno" id="memberno" value="<?php echo $row['memberno'];?>">
                              </div>
                              <div>
                                 <label hidden>Member No.</label><label  class="validation-error hide" required> required </label>
                                 <input type="text" name="mid" id="mid" value="<?php echo $row['mid'];?>">
                              </div>
                              <div>
                                  <label>First Name</label><label class="validation-error hide" required>This field is required.</label>
                                  <input type="text" name="firstName" id="firstName" value="<?php echo $row['firstName'];?>">
                              </div>
                              <div>
                                  <label>Surname</label>
                                  <input type="text" name="surname" id="surname" value="<?php echo $row['surname'];?>">
                              </div>
                              <div>
                               <div>
                                  <label>D.O.B</label>
                                  <input type="date" name="date" id="date" value="<?php echo $row['date'];?>">
                              </div>
                              <div>
                                  <label>Gender</label>
                                 <select name="gender" id="gender" value="<?php echo $row['gender'];?>">
                                     <option value="<?php echo $row['gender'];?>" name="male"><?php echo $row['gender'];?></option>
                                     <option label="Male" value="Male" name="male"></option>
                                     <option label="Female" value="Female" name="female"></option>
                                 </select>
                              </div>
                              <div>
                                  <label>Status</label>
                                 <select name="status" id="status" value="<?php echo $row['status'];?>">
                                     <option name="Single"  value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                                     <option name="Single"  value="Single">Single</option>
                                     <option name="Married" label="Married" value="Married"></option>
                                     <option name="Divorced" label="Divorced" value="Divorced"></option>
                                     <option name="Widow" label="Widow" value="Widow"></option>
                                     <option name="Widower" label="Widower" value="Widower"></option>
                                 </select>
                              </div>
                              <div>
                                  <label>Email</label>
                                  <input type="email" name="email" id="email" value="<?php echo $row['email'];?>">
                              </div>
                              <div>
                                  <label>Contact No.</label>
                                  <input type="number" name="mobile" id="mobile" value="<?php echo $row['mobile'];?>">
                              </div>
                              <div>
                                  <label>Residential Address</label>
                                  <input type="text" name="maddress" id="maddress" value="<?php echo $row['maddress'];?>">
                              </div>
                              <div>
                              <label>Postal Address</label>
                              <input type="text" name="paddress" id="paddress" value="<?php echo $row['paddress'];?>">
                          </div>
                          <div>
                              <label>Occupation</label>
                              <input type="text" name="work" id="work" value="<?php echo $row['work'];?>">
                          </div>
                              <div>
                              <label>Church Group One</label>
                            <select name="group1" id="group1" value="<?php echo $row['group1'];?>">
                                <option  name="Mighty Men" value="<?php echo $row['group1'];?>"><?php echo $row['group1'];?></option>
                                <option  name="Mighty Men" value="Mighty Men">Mighty Men</option>
                                <option  name="Impact Ladies" label="Impact Ladies" value="Impact Ladies"></option>
                                <option  name="Deacons" label="Deacons" value="Deacons"></option>
                                <option  name="Ramah Praise" label="Ramah Praise" value="Ramah Praise"></option>
                                <option  name="Youth" label="Youth" value="Youth"></option>
                                <option  name="Staff" label="Staff" value="Staff"></option>
                                <option  name="Ushers" label="Ushers" value="Ushers"></option>
                                <option  name="Caring Hearts" label="Caring Hearts" value="Caring Hearts"></option>
                                <option  name="Events" label="Events" value="Events"></option>
                            </select>
                          </div>
                          <div>
                            <label>Church Group Two</label>
                            <select name="group2" id="group2" value="<?php echo $row['group2'];?>">
                                <option  name="Mighty Men" value="<?php echo $row['group2'];?>"><?php echo $row['group2'];?></option>
                                <option  name="Mighty Men" value="Mighty Men">Mighty Men</option>
                                <option  name="Impact Ladies" label="Impact Ladies" value="Impact Ladies"></option>
                                <option  name="Deacons" label="Deacons" value="Deacons"></option>
                                <option  name="Ramah Praise" label="Ramah Praise" value="Ramah Praise"></option>
                                <option  name="Youth" label="Youth" value="Youth"></option>
                                <option  name="Staff" label="Staff" value="Staff"></option>
                                <option  name="Ushers" label="Ushers" value="Ushers"></option>
                                <option  name="Caring Hearts" label="Caring Hearts" value="Caring Hearts"></option>
                                <option  name="Events" label="Events" value="Events"></option>
                                <option  name="N/A" label="N/A" value="N/A"></option>
                            </select>
                          </div>
                              <div>
                                  <label>Chapel Group</label>
                                 <select name="chapel" id="chapel" value="<?php echo $row['chapel'];?>">
                                     <option name="FaithChapel" value="<?php echo $row['chapel'];?>"><?php echo $row['chapel'];?></option>
                                     <option name="FaithChapel" value="Faith Chapel">Faith Chapel</option>
                                     <option name="LoveChapel" label="Love Chapel" value="Love Chapel"></option>
                                     <option name="JoyChapel" label="Joy Chapel" value="Joy Chapel"></option>
                                     <option name="GraceChapel" label="Grace Chapel" value="Grace Chapel"></option>
                                 </select>
                              </div>
                              <div>
                                  <label>Member Since</label>
                                  <input type="text" name="since" id="since" value="<?php echo $row['since'];?>">
                              </div>
                              <div class="form-action-buttons">
                               <input name="changed" type="submit" value="Update">
                              </div>
                             </td>
                             
                              <?php } ?>
                        </form>
                    </table>
                    <?php 
                    if (isset($_POST['changed']))
                    {
                        $memberno = $_POST['memberno'];
                        $mid = $_POST['mid'];
                        $firstName = $_POST['firstName'];
                        $surname = $_POST['surname'];
                        $date = $_POST['date'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
                        $email = $_POST['email'];
                        $mobile = $_POST['mobile'];
                        $maddress = $_POST['maddress'];
                        $paddress = $_POST['paddress'];
                        $work = $_POST['work'];
                        $group1 = $_POST['group1'];
                        $group2 = $_POST['group2'];
                        $chapel = $_POST['chapel'];
                        $since = $_POST['since'];
                        


                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `membership` SET mid='$_POST[mid]',firstName='$_POST[firstName]',surname='$_POST[surname]',date='$_POST[date]',gender='$_POST[gender]',status='$_POST[status]',email='$_POST[email]',mobile='$_POST[mobile]',maddress='$_POST[maddress]',paddress='$_POST[paddress]',work='$_POST[work]',group1='$_POST[group1]',group2='$_POST[group2]',chapel='$_POST[chapel]',since='$_POST[since]' WHERE memberno='$_POST[memberno]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Member Records Updated";
                             header('location:men.php');
                         }else
                         {
                             $_SESSION['status'] ="Records Not Updated";
                             header('location:men.php'); 
                         }
                    
                        echo "<script>window.location.href='men.php'</script>";

                    }


                    ?>
                       
    
</body>
</html>