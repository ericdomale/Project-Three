<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");

if (isset($_GET['staffno']))
{
    $staffno = $_GET['staffno'];
    $sql = "SELECT * FROM staff WHERE staffno='$staffno'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        if($row = $result->fetch_assoc()) 
        {?>
            <!--<tr>
                <h1><?php echo $row['stfname'];?>'s Profile</h1>
                <tr><td><?php echo $row['staffno'];?></td><tr>
                <td><?php echo $row['stfname'];?></td>
                <td><?php echo $row['surname'];?></td>
                <td><?php echo $row['stfdate'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['stfemail'];?></td>
                <td><?php echo $row['stfmobile'];?></td>
                <td><?php echo $row['stfaddress'];?></td>
                <td><?php echo $row['stfcity'];?></td>
                <td><?php echo $row['jobdesc'];?></td>
                <td><?php echo $row['chapel'];?></td>
                <td><?php echo $row['empsince'];?></td>
            </tr>-->
            <?php 
                }
                echo '</table>';         
    }
    else {
       echo "0 results";
    }
}
/*else {

    echo '<h2>All our members:</h2>';

    $sql = "SELECT * FROM staff";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) 
        {?>
            <tr>
            <h1><?php echo $row['stfname'];?>'s Profile</h1>
                <tr><td><?php echo $row['staffno'];?></td><tr>
                <td><?php echo $row['stfname'];?></td>
                <td><?php echo $row['surname'];?></td>
                <td><?php echo $row['stfdate'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['stfemail'];?></td>
                <td><?php echo $row['stfmobile'];?></td>
                <td><?php echo $row['stfaddress'];?></td>
                <td><?php echo $row['stfcity'];?></td>
                <td><?php echo $row['jobdesc'];?></td>
                <td><?php echo $row['chapel'];?></td>
                <td><?php echo $row['empsince'];?></td>
            </tr>
            <?php 
                }
    }
    else {
       echo "0 results";
    }
}*/



?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
     <link rel="stylesheet" href="staffprofile.css">
     <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
 </head>
 <body>
        <div class="container">
            <div class="prof-card">
                <div class="iconic">
                       <img class="image" src="../svg/team2-fill.svg">  
                    <div class="info">
                      <h1><?php echo $row['stfname'];?>'s Profile</h1>
                    </div>
                    <div class="count">
                        <table>
                            <tr>
                            <td><?php echo $row['staffno'];?></td>
                            <td><?php echo $row['stfname'];?></td>
                            <td><?php echo $row['surname'];?></td>
                            </tr>
                            <tr>
                                <td class="number">S.ID</td>
                                <td class="fname">FIRSTNAME</td>
                                <td class="sname">SURNAME</td>
                            </tr>
                        </table>
                    </div>
                </div>
   
                <div class="menu-item">
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/time-line.svg">
                        <span class="bold">DATE</span>
                        </div>
                        <span><?php echo $row['stfdate'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/user-2-fill.svg">
                        <span class="bold">GENDER</span>
                        </div>
                        <span><?php echo $row['gender'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/heart-2-fill.svg">
                        <span class="bold">STATUS</span>
                        </div>
                        <span><?php echo $row['status'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/at-fill.svg">
                        <span class="bold">EMAIL</span>
                        </div>
                        <span><?php echo $row['stfemail'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/phone-fill.svg">
                        <span class="bold">CONTACT</span>
                        </div>
                        <span><?php echo $row['stfmobile'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/map-pin-fill.svg">
                        <span class="bold">ADDRESS</span>
                        </div>
                        <span><?php echo $row['stfaddress'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/store-2-fill.svg">
                        <span class="bold">CITY</span>
                        </div>
                        <span><?php echo $row['stfcity'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/pantone-fill.svg">
                        <span class="bold">OCCUPATION</span>
                        </div>
                        <span><?php echo $row['jobdesc'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/bank-fill.svg">
                        <span class="bold">CHAPEL</span>
                        </div>
                        <span><?php echo $row['chapel'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <img class="image" src="../svg/time-line.svg">
                        <span class="bold">SINCE</span>
                        </div>
                        <span><?php echo $row['empsince'];?> <i class="fas fa-angle-right"></i></span>
                    </div>
   
                    <div class="item">
                        <div class="item-area">
                        <i class="fas fa-angle-left" onclick="history.back()"></i>
                        <span class="bold" onclick="history.back()">BACK</span>
                        </div>
                        <span><a href="staffprofile.php?staffno=<?php echo $row['staffno']; ?>" >NEXT <i class="fas fa-angle-right"></i></a></span>
                    </div>
                </div>
            </div>
        </div>   
 </body>
 </html>
