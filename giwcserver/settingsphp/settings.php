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
    <title>Settings</title>
    <link rel="stylesheet" type="text/css" href="settings.css">
</head>
<body>
    <header>
        <div class="left_area">
            <h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../memberphp/men.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/settings-4-line.svg"><span>Admin & More.</span></h3>
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
  
    <div class="container">
        <a href="../checkerphp/index.html" class="box" >
            <div class="icon">
                <img class="img" src="../svg/calculator-line.svg">
            </div>
            <div class="content">
                <h3>Budget Checker</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>
        <a  href="../routinephp/index.html" class="box">
            <div class="icon">
                <img  class="img" src="../svg/calendar-event-fill.svg">
            </div>
            <div class="content">
                <h3>Church Routines</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>
        <a href="../staffphp/staff.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/team-fill.svg">
            </div>
            <div class="content">
                <h3>Staff Workers</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>
       <a href="../pledgesphp/pledge.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/medal-fill.svg">
            </div>
            <div class="content">
                <h3>Pledges</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>
        <a href="../tithephp/tithe.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/account-pin-circle-line.svg">
            </div>
            <div class="content">
                <h3>Member Tithes</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>
        <a href="../adminboard/adminboard.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/database-2-fill.svg">
            </div>
            <div class="content">
                <h3>Adminboard</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>
        <!--<a href="../setmainphp/setmain.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/file-settings-fill.svg">
            </div>
            <div class="content">
                <h3>Settings</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>-->
        <a href="../adminusers/adminusers.php" class="box" >
            <div class="icon">
                <img class="img" src="../svg/shield-keyhole-fill.svg">
            </div>
            <div class="content">
                <h3>Adminusers.</h3>
                <p>Control of Roles and Access to Records and Database.</p>
            </div>
        </a>
        <a href="../affilate/affilate.php" class="box" >
            <div class="icon">
                <img class="img" src="../svg/group-2-fill.svg">
            </div>
            <div class="content">
                <h3>Affiliates.</h3>
                <p>Control of Roles and Access to Records and Database.</p>
            </div>
        </a>
        <a href="../affilate/afftithe.php" class="box" >
            <div class="icon">
                <img class="img" src="../svg/group-2-line.svg">
            </div>
            <div class="content">
                <h3>Affiliate Tithes.</h3>
                <p>Control of Roles and Access to Records and Database.</p>
            </div>
        </a>
  </div>
</body>
</html>
