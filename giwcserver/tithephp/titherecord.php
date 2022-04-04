<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
?>
                           
                           
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="titherecord.css">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
</head>
<body>
    


        <div class="container">
         <header>
             <h3>
               <img class="left" onclick="history.back()" src="../svg/arrow-left-circle-line.svg">
               <img src="../svg/account-pin-circle-line.svg">
               Tithe Records.
             </h3>
         
         </header>
            <div class="toggle-btns">
                <i class="fas fa-list list-layout active" onclick="toggleView(event);"></i>
                <i class="fas fa-th-large grid-layout" onclick="toggleView(event);"></i>
            </div>
            <?php
                      $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");

                       $tid = $_GET['tid'];
                       $sql = "SELECT * FROM tithes WHERE tid='$tid' ORDER BY tid ASC";
    
                       $result = $conn->query($sql);
                       if ($result->num_rows > 0) {


                        while($row = $result->fetch_assoc()) {
                           
                            ?>

            <div class="project-container list">
                <div class="project">
                    <div class="top-menu">
                    
                    <i class="fas fa-star"></i>
                    <i class="fas fa-ellipsis-h"></i>
                    <h4><?php echo $row['firstName'];?></h4>
                   
                    </div>
                    <div class="status">
                    <h4><?php echo $row['tmid'];?></h4>
                    </div>
                   
                   
                    <img class="profile-img" src="../svg/account-pin-circle-line.svg">
                    <h1 class="project-title">
                        <i class="fas fa-thumb-tack"></i>
                        <?php echo $row['pdate'];?>
                    </h1>
                    <h2 class="project-desc">
                    <i class="fas fa-bookmark"></i>
                    <tr><td>OTHERS:</td><td><?php echo $row['others'];?></td></tr><br>
                    <i class="fas fa-calendar-alt"></i>
                    <tr><td>MONTH:</td><td><?php echo $row['otmonth'];?></td></tr><br>
                    <i class="fas fa-dollar"></i>
                    <tr><td>AMOUNT:</td><td><?php echo $row['otamount'];?></td></tr>
                    </h2>
                    <div class="project-info">
                        <div class="detail">
                            <div class="info">
                                <h2><i class="fas fa-bookmark"></i></h2>
                                <h2>TYPE:</h2>
                                <h2><?php echo $row['titype'];?></h2>
                            </div><br>
                            <div class="info">
                                <h2><i class="fas fa-calendar-alt"></i></h2>
                                <h2>MONTH:</h2>
                                <h2><?php echo $row['pmonth'];?></h2>
                            </div>
                        </div>
                        <div class="detail flex">
                            <div class="info">
                                <h2><i class="fas fa-dollar"></i><h2>
                                <h2>AMOUNT:</h2>
                                <h2><?php echo $row['pamount'];?></h2>
                            </div>
                            
                        
                            <div class="members">
                                <img src="../svg/shield-star-line.svg"> 
                               
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                            
                        }  echo '</table>';
                    }
                    else {
                       echo "0 results";
                    }
                       
                       
                       ?>
              

                <!--<div class="project">
                    <div class="top-menu">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-ellipsis-h"></i>
                   
                    </div>

                    <img class="profile-img" src="../svg/account-pin-circle-line.svg">

                    <h2 class="project-title">Revolution</h2>
                    <p class="project-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ducimus exercitationem sit quod expedita iusto ut corrupti ex excepturi nisi!
                    </p>
                    <div class="project-info">
                        <div class="detail">
                            <div class="info">
                                <i class="fas fa-tasks"></i>
                                <p>Task: Commercial Project</p>
                            </div>
                        </div>
                        <div class="detail flex">
                            <div class="info">
                                <i class="fas fa-calendar-alt"></i>
                                <p>Date: 09.01.2021</p>
                            </div>
                        
                            <div class="members">
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project">
                    <div class="top-menu">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-ellipsis-h"></i>
                   
                    </div>

                    <img class="profile-img" src="../svg/account-pin-circle-line.svg">

                    <h2 class="project-title">Revolution</h2>
                    <p class="project-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ducimus exercitationem sit quod expedita iusto ut corrupti ex excepturi nisi!
                    </p>
                    <div class="project-info">
                        <div class="detail">
                            <div class="info">
                                <i class="fas fa-tasks"></i>
                                <p>Task: Commercial Project</p>
                            </div>
                        </div>
                        <div class="detail flex">
                            <div class="info">
                                <i class="fas fa-calendar-alt"></i>
                                <p>Date: 09.01.2021</p>
                            </div>
                        
                            <div class="members">
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project">
                    <div class="top-menu">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-ellipsis-h"></i>
                   
                    </div>

                    <img class="profile-img" src="../svg/account-pin-circle-line.svg">

                    <h2 class="project-title">Revolution</h2>
                    <p class="project-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ducimus exercitationem sit quod expedita iusto ut corrupti ex excepturi nisi!
                    </p>
                    <div class="project-info">
                        <div class="detail">
                            <div class="info">
                                <i class="fas fa-tasks"></i>
                                <p>Task: Commercial Project</p>
                            </div>
                        </div>
                        <div class="detail flex">
                            <div class="info">
                                <i class="fas fa-calendar-alt"></i>
                                <p>Date: 09.01.2021</p>
                            </div>
                        
                            <div class="members">
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project">
                    <div class="top-menu">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-ellipsis-h"></i>
                   
                    </div>

                    <img class="profile-img" src="../svg/account-pin-circle-line.svg">

                    <h2 class="project-title">Revolution</h2>
                    <p class="project-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ducimus exercitationem sit quod expedita iusto ut corrupti ex excepturi nisi!
                    </p>
                    <div class="project-info">
                        <div class="detail">
                            <div class="info">
                                <i class="fas fa-tasks"></i>
                                <p>Task: Commercial Project</p>
                            </div>
                        </div>
                        <div class="detail flex">
                            <div class="info">
                                <i class="fas fa-calendar-alt"></i>
                                <p>Date: 09.01.2021</p>
                            </div>
                        
                            <div class="members">
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                                <img src="../svg/account-pin-circle-line.svg"> 
                            </div>
                        </div>
                    </div>
                </div>-->



            </div>
        </div>
      
        


        <script>

            function toggleView(e){

                if(e.target.classList.contains('list-layout')){

                    document.querySelector('.toggle-btns').children[0].classList.add('active');
                    document.querySelector('.toggle-btns').children[1].classList.remove('active');

                    document.querySelector('.project-container').classList.add('list');
                    document.querySelector('.project-container').classList.remove('grid');
                }
                else if (e.target.classList.contains('grid-layout')){

                    document.querySelector('.toggle-btns').children[0].classList.remove('active');
                    document.querySelector('.toggle-btns').children[1].classList.add('active');

                    document.querySelector('.project-container').classList.remove('list');
                    document.querySelector('.project-container').classList.add('grid');
                }


            }

        </script>
</body>
</html>