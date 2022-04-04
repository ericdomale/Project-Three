<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
 $offid = $_GET['offid'];

 $query = "SELECT * FROM offerings WHERE offid='$offid'";
 $update = mysqli_query($conn,$query);

?>

<head>
    <title>
        Offerings
    </title>
    <link rel="stylesheet" href="offering.css">
</head>

<body>
    <header>
        <div class="left_area">
            <!--<h3><img class="prev"  onclick="history.back()" src="svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="expenses.html"><img class="next" src="svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/hand-coin-line.svg"><span>Offerings Update.</span></h3>
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
        <form action="" method="POST" autocomplete="off">
                <?php while ($row = mysqli_fetch_array($update)) {?>
                         <div>
                             <label hidden>Offering ID</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="offid" id="offid" value="<?php echo $row['offid'];?>">
                          </div>
                            <div>
                                <label>Week</label><label class="validation-error hide">This field is required.</label>
                                <input type="week" name="offweek" id="offweek" value="<?php echo $row['offweek'];?>">
                            </div>
                            <div>
                                <label>Date</label>
                                <input type="date" name="offdate" id="offdate" value="<?php echo $row['offdate'];?>">
                            </div>
                            <div>
                                <label>Program</label>
                            <select name="offprogram" id="offprogram" value="<?php echo $row['offprogram'];?>">
                                <option name="Sunday Service" label="Sunday Service" value="<?php echo $row['offprogram'];?>"><?php echo $row['offprogram'];?></option>
                                <option name="Sunday Service" label="Sunday Service" value="Sunday Service">Sunday Service</option>
                                <option name="Anointing Service" label="Anointing Service" value="Anointing Service">Anointing Service</option>
                                <option name="Thanksgiving Service" label="Thanksgiving Service" value="Thanksgiving Service">Thanksgiving Service</option>
                                <option name="Special Service" label="Special Service" value="Special Service">Special Service</option>
                                <option name="Tuesday Service" label="Tuesday Service" value="Tuesday Service">Tuesday Service</option>
                                <option name="Friday Night Service" label="Friday Night Service" value="Friday Night Service">Friday Night Service</option>
                            </select>
                            </div>
                            <div>
                                <label>Offering Type</label>
                            <select name="offertype" id="offertype" value="<?php echo $row['offertype'];?>">
                                <option name="Sunday Offering" value="<?php echo $row['offertype'];?>"><?php echo $row['offertype'];?></option>
                                <option name="Sunday Offering" value="Sunday Offering">Sunday Offering</option>
                                <option name="Seed Offering" label="Seed Offering" value="Seed Offering">Seed Offering</option>
                                <option name="Thanksgiving" label="Thanksgiving" value="Thanksgiving">Thanksgiving</option>
                                <option name="Special Offering" label="Special Offering" value="Special Offering">Special Offering</option>
                                <option name="First Fruit" label="First Fruit" value="First Fruit">First Fruit</option>
                                <option name="Sacrifice Offering" label="Sacrifice Offering" value="Sacrifice Offering">Sacrifice Offering</option>
                                <option name="Tuesday Offering" value="Tuesday Offering">Tuesday Offering</option>
                                <option name="Friday Night Offering" value="Friday Night Offering">Friday Night Offering</option>
                            </select>
                            </div>
                            <div>
                                <label>Offering Amount</label>
                                <input type="text" name="ofamount" id="ofamount" value="<?php echo $row['ofamount'];?>">
                            </div>
                            <div>
                                <label>Tithe Amount</label>
                                <input type="text" name="thamount" id="thamount" value="<?php echo $row['thamount'];?>">
                            </div>
                            <div class="form-action-buttons">
                                <input type="submit"  name="changed" value="Update">
                            </div>
                            <?php }?>
                        </form>
        </table>
        <?php 
                    if (isset($_POST['changed']))
                    {
                        $offid =$_POST['offid'];
                        $offweek = $_POST['offweek'];
                        $offdate = $_POST['offdate'];
                        $offprogram = $_POST['offprogram'];
                        $offertype = $_POST['offertype'];
                        $ofamount = $_POST['ofamount'];
                        $thamount = $_POST['thamount'];


                      
                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
                        $query = "UPDATE `offerings` SET offid='$_POST[offid]',offweek='$_POST[offweek]',offdate='$_POST[offdate]',offprogram='$_POST[offprogram]',offertype='$_POST[offertype]',ofamount='$_POST[ofamount]',thamount='$_POST[thamount]' WHERE offid='$_POST[offid]'";
                        $queryrun = mysqli_query($conn,$query);

                        if ($queryrun)
                        {
                            $_SESSION['success'] ="Offering Updated";
                            header('location:offering.php');
                        }else
                        {
                            $_SESSION['status'] ="Offering Not Updated";
                            header('location:offering.php'); 
                        }


                        echo "<script>window.location.href='offering.php'</script>";



                    }


                    ?>
           
