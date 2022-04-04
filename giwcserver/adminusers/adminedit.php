<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $adid = $_GET['adid'];

 $query = "SELECT * FROM login WHERE adid='$adid'";
 $update = mysqli_query($conn,$query);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminusers</title>
    <link rel="stylesheet" href="adminusers.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>
<body>
<header>
        <div class="left_area">
            <!--<h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../eventsphp/event.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/shield-keyhole-fill.svg"><span>Admin Update.</span></h3>
          </div>
          <div class="right_area">
            <!--<a  href="../settingsphp/settings.php" class="home_btn">Home</a>-->
          </div>
          <div class="right_area">
          <!--<form action="../loginphp/logout.php" method="POST">
            <button name="logout_btn" class="logout_btn">Logout</button>
            </form>-->
          </div>
        </header>
        <br>
        <br>
        <table>
               <form method="POST" action="" autocomplete="off">
               <?php while ($row = mysqli_fetch_array($update)) {?>
                          <div>
                             <label hidden>ID</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="adid" id="adid" value="<?php echo $row['adid'];?>">
                          </div>
                    <div>
                        <label>Username</label><label class="validation-error hide" id="dateValidationError">This field is required.</label>
                        <input type="text" name="username" id="username" value="<?php echo $row['username'];?>">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" id="password" value="<?php echo $row['passkey'];?>">
                    </div>
                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="cfpassword" id="cfpassword" value="<?php echo $row['passkey'];?>">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="changed" type="submit" value="Update">
                    </div>
                    <?php }?>
                </form>
        </table>
</body>
</html>
<?php 
                   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 

                    if (isset($_POST['changed']))
                    {
                        $adid = $_POST['adid'];
                        $username = $_POST['username'];
                        $password = $_POST['passkey'];
                        $cfpassword = $_POST['passkey'];
                
                         
                        if($password === $cfpassword)
                        {
                            $passkey = password_hash($password, PASSWORD_DEFAULT); 

                             $query = "UPDATE `login` SET username='$_POST[username]',password='$_POST[passkey]' WHERE adid='$_POST[adid]'";
                            $queryrun = mysqli_query($conn,$query);
    
                            if ($queryrun)
                            {
                                $_SESSION['success'] ="Admin Updated";
                                header('location:adminusers.php');
                            }else
                            {
                                $_SESSION['status'] ="Admin Not Updated";
                                header('location:adminusers.php'); 
                            }
                            echo "<script>window.location.href='adminusers.php'</script>"; 
                           
                             
                        }else
                        {
                            $_SESSION['status'] ="Password Not Matching";
                             header('location:adminusers.php'); 
                        }
                      
                    }


                    ?>