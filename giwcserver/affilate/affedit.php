<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $affno = $_GET['affno'];

 $query = "SELECT * FROM affilate WHERE affno='$affno'";
 $update = mysqli_query($conn,$query);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="affedit.css">
</head>
<body>
<header>
        <div class="left_area">
           <!--<h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="offering.html"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/group-2-fill.svg"><span>Affilate Update.</span></h3>
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
                                 <label hidden>Member No.</label><label  class="validation-error hide" required> required </label>
                                 <input type="hidden" name="affno" id="affno" value="<?php echo $row['affno'];?>">
                              </div>
                              <div>
                                  <label>First Name</label><label class="validation-error hide" required>This field is required.</label>
                                  <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname'];?>">
                              </div>
                              <div>
                                  <label>Surname</label>
                                  <input type="text" name="surname" id="surname" value="<?php echo $row['surname'];?>">
                              </div>
                              <div>
                               <div>
                                  <label>D.O.B</label>
                                  <input type="date" name="affdate" id="affdate" value="<?php echo $row['affdate'];?>">
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
                                  <input type="number" name="affmobile" id="affmobile" value="<?php echo $row['affmobile'];?>">
                              </div>
                              <div>
                                  <label>Address</label>
                                  <input type="text" name="affaddress" id="affaddress" value="<?php echo $row['affaddress'];?>">
                              </div>
                              <div>
                                  <label>City/Town</label>
                                  <input type="text" name="city" id="city" value="<?php echo $row['city'];?>">
                              </div>
                              <div>
                                  <label>Member Since</label>
                                  <input type="date" name="affsince" id="affsince" value="<?php echo $row['affsince'];?>">
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
                        
                        $affno = $_POST['affno'];
                        $firstname = $_POST['firstname'];
                        $surname = $_POST['surname'];
                        $affdate = $_POST['affdate'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
                        $email = $_POST['email'];
                        $affmobile = $_POST['affmobile'];
                        $affaddress = $_POST['affaddress'];
                        $affsince = $_POST['affsince'];


                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `affilate` SET  firstname='$_POST[firstname]',surname='$_POST[surname]',affdate='$_POST[affdate]',gender='$_POST[gender]',status='$_POST[status]',email='$_POST[email]',affmobile='$_POST[affmobile]',affaddress='$_POST[affaddress]',city='$_POST[city]',affsince='$_POST[affsince]' WHERE affno='$_POST[affno]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Affilate Records Updated";
                             header('location:affilate.php');
                         }else
                         {
                             $_SESSION['status'] ="Records Not Updated";
                             header('location:affilate.php'); 
                         }
                    
                        echo "<script>window.location.href='affilate.php'</script>";

                    }


                    ?>
                       
    
</body>
</html>