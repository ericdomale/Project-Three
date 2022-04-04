<?php
 session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <div class="left_area">
            <h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../adminusers/adminusers.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/database-2-fill.svg"><span>Adminboard.</span></h3>
        </div>
        <div class="right_area">
            <a  href="../maindashphp/maindash.php" class="home_btn"><?php echo $_SESSION['username'];?></a>
        </div>
        <div class="right_area">
            <form action="../loginphp/logout.php" method="POST">
              <button name="logout_btn" class="logout_btn">Logout</button>
            </form>
        </div>
    </header>
    <br>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                   <a href="">
                     <span class="icon"><i class="fas fa-home"></i></span>
                     <span class="title"><h2>Overview</h2></span>
                   </a>
                </li>
                <li>
                   <a href="../memberphp/men.php">
                     <span class="icon"><i class="fas fa-user"></i></span>
                     <span class="title">Membership</span>
                   </a>
                </li>
                <li>
                    <a href="../offeringphp/offering.php">
                     <span class="icon"><i class="fas fa-usd"></i></span>
                     <span class="title">Offerings & Tithes </span>
                    </a>
                </li>
                <li>
                    <a href="../expensesphp/expenses.php">
                     <span class="icon"><i class="fas fa-credit-card"></i></span>
                     <span class="title">Expenses</span>
                    </a>
                </li>
                <li>
                    <a href="../revenuephp/revenue.php">
                     <span class="icon"><i class="fas fa-bar-chart-o"></i></span>
                     <span class="title">Revenue</span>
                    </a>
                </li>
                <li>
                    <a href="../eventsphp/event.php">
                     <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                     <span class="title">Events & Programs</span>
                    </a>
                </li>
                <li>
                    <a href="../pledgesphp/pledge.php">
                     <span class="icon"><i class="fas fa-bullseye"></i></span>
                     <span class="title">Pledges</span>
                    </a>
                </li>
                <li>
                    <a href="../staffphp/staff.php">
                     <span class="icon"><i class="fas fa-users"></i></span>
                     <span class="title">Staff</span>
                    </a>
                </li>
                <li>
                    <a href="../tithephp/tithe.php">
                     <span class="icon"><i class="fas fa-shopping-basket"></i></span>
                     <span class="title">Members Tithes</span>
                    </a>
                </li>
                <li>
                    <a href="../settingsphp/settings.php">
                     <span class="icon"><i class="fas fa-cog"></i></span>
                     <span class="title">Admin & More</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder=" Search here...">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
               <div class="user">
                    <img src="giwc7.jpg">
                </div>
            </div>

            <div class="cardBox">
             <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                           $query = "SELECT memberno FROM membership";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">Members</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                           $query = "SELECT staffno FROM staff";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">Staff</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-users"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                           $query = "SELECT adid FROM login";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">Admins</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-male"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(revamount) AS sum FROM `revenue`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">Revenue</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-bar-chart-o"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(ofamount) AS sum FROM `offerings`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">Offering</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-usd"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(thamount) AS sum FROM `offerings`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">Tithes</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-dollar"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(pdgamount) AS sum FROM `pledges` WHERE pdgstatus='Paid'";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">Pledges</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-bullseye"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(jotamount) AS sum FROM `joint`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">Current Budget</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-thumb-tack"></i>
                    </div>
                </div>
            </div>
            

             <div class="details">
                 <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>Recent Pledges</h2>
                            <a href="" class="btn">View All</a>
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Program</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT pdgid, pdgname, pdgory, pgdate, pdgstatus, pdgmonth, pdgamount FROM pledges WHERE pdgstatus='Unpaid' ORDER BY pdgid DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['pdgname'];?></td>
                                <td><?php echo $row['pdgory'];?></td>
                                <td><?php echo $row['pgdate'];?></td>
                                <td><?php echo $row['pdgstatus'];?></td>
                                <!--<td><?php echo $row['pdgmonth'];?></td>-->
                                <td><span class="status"><?php echo $row['pdgamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>              
                        </tbody>
                    </table>
                 </div>

                

                 <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Sunday Offerings</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offdate, ofamount FROM offerings WHERE offprogram='Sunday Service' AND offertype='Sunday Offering' ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['offdate'];?><br><span class="status">GHc<?php echo $row['ofamount'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings WHERE offprogram='Sunday Service' AND offertype='Sunday Offering' AND offdate";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>
             </div>







             <div class="details2">
             <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Sunday Offerings</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offdate, ofamount FROM offerings WHERE offprogram='Sunday Service' AND offertype='Sunday Offering' ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['offdate'];?><br><span class="status">GHc<?php echo $row['ofamount'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings WHERE offprogram='Sunday Service' AND offertype='Sunday Offering' AND offdate";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Tuesday Offerings</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offdate, ofamount FROM offerings WHERE offprogram='Tuesday Service' AND offertype='Tuesday Offering' ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['offdate'];?><br><span class="status">GHc<?php echo $row['ofamount'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings WHERE offprogram='Tuesday Service' AND offertype='Tuesday Offering' AND offdate";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Friday Offerings</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offdate, ofamount FROM offerings WHERE offprogram='Friday Night Service' AND offertype='Friday Night Offering' ORDER BY offid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['offdate'];?><br><span class="status">GHc<?php echo $row['ofamount'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(ofamount) AS sum FROM offerings WHERE offprogram='Friday Night Service' AND offertype='Friday Night Offering' AND offdate";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>
             </div>








             <div class="details">
                <div class="recentOrders">
                        <div class="cardHeader">
                                <h2>Chapels</h2>
                                <a href="" class="cbtn">Chart</a>
                        </div>
                        <div id="chart-container">
                            <canvas id="mycanvas"></canvas>
                            <?php require 'adminchart.php' ?>
                        </div>
                        
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Gender</h2>
                            <a href="" class="cbtn">Chart</a>
                        </div>
                        <div id="chart-container2">
                            <canvas id="mycanvas2"></canvas>
                            <?php require 'adminchart.php' ?>
                        </div>
                    </div>
             </div>
                











             <div class="cardBox">
             <div class="card">
                    <div>
                        <div class="numbers">
                        <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(expamount) AS sum FROM `expenses`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                           ?>
                           <?php echo $output; ?>
                        </div>
                        <div class="cardName">Expenses</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-credit-card"></i>
                    </div>
                </div>
                    <div class="card">
                        <div>
                            <div class="numbers">
                           <?php $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $query = "SELECT SUM(eincome) AS sum FROM `events`";
                            $query_run = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($query_run)){

                                $output = 'GHc '.$row['sum'];

                            }; 
                            ?>
                            <?php echo $output; ?>
                            </div>
                                <div class="cardName">Events Income</div>
                        </div>
                            <div class="iconBox">
                                <i class="fas fa-usd"></i>
                            </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">
                                    <?php

                                $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                $query = "SELECT staffno FROM staff";
                                $query_run = mysqli_query($conn,$query);

                                $row = mysqli_num_rows($query_run);

                                echo $row;

                                    ?>
                            </div>
                                <div class="cardName">Staff</div>
                        </div>
                            <div class="iconBox">
                                <i class="fas fa-camera-retro"></i>
                            </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">
                                    <?php

                                $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                $query = "SELECT staffno FROM staff";
                                $query_run = mysqli_query($conn,$query);

                                $row = mysqli_num_rows($query_run);

                                echo $row;

                                    ?>
                            </div>
                                <div class="cardName">Staff</div>
                        </div>
                            <div class="iconBox">
                                <i class="fas fa-lemon-o"></i>
                            </div>
                    </div>
                </div>


             <div class="details">
             <div class="recentOrders">
                     <div class="cardHeader">
                            <h2>Recent Offerings</h2>
                            <a href="" class="btn">Overview</a>
                     </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Week</td>
                                <td>Date</td>
                                <td>Program</td>
                                <td>Type</td>
                                <td>Amount</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT offid, offweek, offdate, offprogram, offertype, ofamount FROM offerings ORDER BY offid DESC LIMIT 7";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['offweek'];?></td>
                                <td><?php echo $row['offdate'];?></td>
                                <td><?php echo $row['offprogram'];?></td>
                                <td><?php echo $row['offertype'];?></td>
                                <td><span class="status"><?php echo $row['ofamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>              
                        </tbody>
                    </table>
                 </div>

                 <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Programs</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                     <table>
                     <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                            $sql = "SELECT fdate, eventname, eincome FROM events ORDER BY eventid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                                    
                         <tbody>
                             <tr>
                                 <td width="70px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                 <td><h4><?php echo $row['fdate'];?><br><?php echo $row['eventname'];?><br><span class="status">GHc<?php echo $row['eincome'];?></span></h4></td>
                             </tr>
                             <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?><br>   
                            <td width="60px">
                                <?php
                                    $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

                                    $query = "SELECT SUM(eincome) AS sum FROM events";
                                    $query_run = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($query_run)){

                                        $output = 'Total: GHc '.$row['sum'];

                                    }; 
                                ?>
                                <?php echo $output; ?>
                            </td>
                            <!-- <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Shiloh<br><span>Conference</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Project<br><span>Summit</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="giwclogo.jpg"></div></td>
                                <td><h4>Iron<br><span>Gathering</span></h4></td>
                            </tr>-->
                         </tbody>
                     </table>
                </div>
             </div>

            



             <div class="details">
                <div class="recentOrders">
                        <div class="cardHeader">
                                <h2>Chapels</h2>
                                <a href="" class="cbtn">Chart</a>
                        </div>
                            <div id="chart-container">
                                <canvas id="mycanvas3"></canvas>
                            </div>
                        
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Revenue</h2>
                            <a href="" class="cbtn">Chart</a>
                        </div>
                        <div id="chart-container4">
                            <canvas id="mycanvas4"></canvas>
                            <?php require 'adminchart.php' ?>
                        </div>
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Expenses</h2>
                            <a href="" class="cbtn">Chart</a>
                        </div>
                        <div id="chart-container4">
                            <canvas id="mycanvas5"></canvas>
                            <?php require 'canvas5.php' ?>
                        </div>
                    </div>

                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Offerings</h2>
                            <a href="" class="cbtn">Chart</a>
                        </div>
                        <div id="chart-container4">
                            <canvas id="mycanvas6"></canvas>
                            <?php require 'adminchart.php' ?>
                        </div>
                    </div>
             </div>
                

             


        </div>
    </div>

    
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../Chart.min.js"></script>
    <script type="text/javascript" src="adminchart.js"></script>
    <script type="text/javascript" src="canvas5.js"></script>
    <script>
        function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>
</body>
</html>