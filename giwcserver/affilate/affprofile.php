<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");

if (isset($_GET['affno']))
{
    $affno = $_GET['affno'];
    $sql = "SELECT * FROM affilate WHERE affno='$affno'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        
        if($row = $result->fetch_assoc()) 
       {?>
           <!--<tr>
            <h1><?php echo $row['firstName'];?>'s Profile</h1>
                <td><?php echo $row['memberno'];?></td>
                <td><?php echo $row['firstName'];?></td>
                <td><?php echo $row['surname'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['maddress'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['group1'];?></td>
                <td><?php echo $row['group2'];?></td>
                <td><?php echo $row['chapel'];?></td>
                <td><?php echo $row['since'];?></td>
                <td><a href="edit.php?memberno=<?php echo $row['memberno']; ?>" class="edit">Edit</a></td>
                <td><a href="delete.php?memberno=<?php echo $row['memberno']; ?>" onClick="onDelete(this)" class="delete">Delete</a></td>
                <td><a href="../profilesphp/profile.php?memberno=<?php echo $row['memberno']; ?>" class="view">View</a></td>
            </tr>-->
            <?php
                }
        echo '</table>';
    }
   else {
       echo "0 results";
    }
}
else {

    echo '<h2>All our members:</h2>';

    $sql = "SELECT * FROM affilate";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) 
        {?>
            <tr>
                <h1><?php echo $row['firstname'];?>'s Profile</h1>
                <tr><td><?php echo $row['affno'];?></td><tr>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['surname'];?></td>
                <td><?php echo $row['affdate'];?></td>
                <td><p class="gender"><?php echo $row['gender'];?></p></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['affmobile'];?></td>
                <td><?php echo $row['affaddress'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['affsince'];?></td>
            </tr>
            <?php 
                }
    }
    else {
       echo "0 results";
    }
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
     <link rel="stylesheet" href="affprofile.css">
     <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
 </head>
 <body>
     <div class="container">
         <div class="prof-card">
             <div class="iconic">
                    <img class="image" src="../svg/group-2-aff.svg">  
                 <div class="info">
                   <h1><?php echo $row['firstname'];?>'s Profile</h1>
                 </div>
                 <div class="count">
                     <table>
                         <tr>
                         <td><?php echo $row['affno'];?></td>
                         <td><?php echo $row['firstname'];?></td>
                         <td><?php echo $row['surname'];?></td>
                         </tr>
                         <tr>
                             <td class="number">ID</td>
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
                     <span><?php echo $row['affdate'];?> <i class="fas fa-angle-right"></i></span>
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
                     <span><?php echo $row['email'];?> <i class="fas fa-angle-right"></i></span>
                 </div>

                 <div class="item">
                     <div class="item-area">
                     <img class="image" src="../svg/phone-fill.svg">
                     <span class="bold">CONTACT</span>
                     </div>
                     <span><?php echo $row['affmobile'];?> <i class="fas fa-angle-right"></i></span>
                 </div>

                 <div class="item">
                     <div class="item-area">
                     <img class="image" src="../svg/map-pin-fill.svg">
                     <span class="bold">ADDRESS</span>
                     </div>
                     <span><?php echo $row['affaddress'];?> <i class="fas fa-angle-right"></i></span>
                 </div>

                 <div class="item">
                     <div class="item-area">
                     <img class="image" src="../svg/store-2-fill.svg">
                     <span class="bold">CITY</span>
                     </div>
                     <span><?php echo $row['city'];?> <i class="fas fa-angle-right"></i></span>
                 </div>

                 <div class="item">
                     <div class="item-area">
                     <img class="image" src="../svg/time-line.svg">
                     <span class="bold">SINCE</span>
                     </div>
                     <span><?php echo $row['affsince'];?> <i class="fas fa-angle-right"></i></span>
                 </div>

                 <div class="item">
                     <div class="item-area">
                     <i class="fas fa-angle-left" onclick="history.back()"></i>
                     <span class="bold" onclick="history.back()">BACK</span>
                     </div>
                     <span><a href="profile.php?affno=<?php echo $row['affno']; ?>" style="text-decoration: none;">NEXT <i class="fas fa-angle-right"></i></a></span>
                 </div>
             </div>
         </div>
     </div>
     
 </body>
 </html>

 
 

