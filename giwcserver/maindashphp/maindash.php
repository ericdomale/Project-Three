<?php session_start();
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
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="maindash.css">
</head>
<body>
    <header>
    <div class="left_area">
            <img class="jpg" src="IMG-20210113-WA0003.jpg">
          </div>
          <div class="right_area">
            <form action="../loginphp/logout.php" method="POST">
            <button name="logout_btn" class="logout_btn"><?php echo $_SESSION['username'];?></button>
            </form>
          </div>
          
    </header>
    <br>

    <div class="container">
        <a href="../memberphp/men.php" class="box" >
            <div class="icon">
                <img class="img" src="../svg/account-pin-box-fill.svg">
            </div>
            <div class="content">
                <h3>Membership</h3>
                <p>Information of Church Members from Gender, Birth, Member Number and etc.</p>
            </div>
        </a>
        <a  href="../offeringphp/offering.php"class="box">
            <div class="icon">
                <img  class="img" src="../svg/hand-coin-line.svg">
            </div>
            <div class="content">
                <h3>Offerings & Tithes</h3>
                <p>Details of tithes and offerings generated on daily, weekly, monthly basis.</p>
            </div>

        </a>
        <a href="../expensesphp/expenses.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/coins-fill.svg">
            </div>
            <div class="content">
                <h3>Expenses</h3>
                <p>Financial records of daily expenditures of church from expense name to payment method.</p>
            </div>
        </a>
        <a href="../revenuephp/revenue.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/wallet-3-fill.svg">
            </div>
            <div class="content">
                <h3>Revenue</h3>
                <p>Financial records of daily revenue of church from revenue type name to amount.</p>
            </div>
        </a>
        <a href="../eventsphp/event.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/calendar-todo-fill.svg">
            </div>
            <div class="content">
                <h3>Events & Programs</h3>
                <p>Information for events and programs either upcoming, current or past.</p>
            </div>
        </a>
        <!--<a href="../settingsphp/settings.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/settings-4-line.svg">
            </div>
            <div class="content">
                <h3>Admin & More</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>-->
        <a href="../staffphp/staff.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/team-fill.svg">
            </div>
            <div class="content">
                <h3>Staff Workers</h3>
                <p>Information of Staff Members from Gender, Birth, Occupation and etc.</p>
            </div>
        </a>
        <a  href="../routinephp/index.html" class="box">
            <div class="icon">
                <img  class="img" src="../svg/calendar-event-fill.svg">
            </div>
            <div class="content">
                <h3>Church Routines</h3>
                <p>Routines, programs or activites held daily, weekly or monthly basis in the church calendar.</p>
            </div>
        </a>
        
       <a href="../pledgesphp/pledge.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/medal-fill.svg">
            </div>
            <div class="content">
                <h3>Pledges</h3>
                <p>Details and overview of pledges donated on daily, weekly, monthly basis.</p>
            </div>
        </a>
        <a href="../tithephp/tithe.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/account-pin-circle-line.svg">
            </div>
            <div class="content">
                <h3>Member Tithes</h3>
                <p>Details of member tithes and offerings generated on daily, weekly, monthly basis.</p>
            </div>
        </a>
        <a href="../adminboard/adminboard.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/database-2-fill.svg">
            </div>
            <div class="content">
                <h3>Adminboard</h3>
                <p>Overview of data been processed and quick summary of events, activites and management.</p>
            </div>
        </a>
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
                <p>Information of Affiliate Members from Gender, Birth, Occupation and etc.</p>
            </div>
        </a>
        <a href="../affilate/afftithe.php" class="box" >
            <div class="icon">
                <img class="img" src="../svg/group-2-line.svg">
            </div>
            <div class="content">
                <h3>Affiliate Tithes.</h3>
                <p>Details of affiliate member tithes and offerings generated on daily, weekly, monthly basis.</p>
            </div>
        </a>
  </div>
    
</body>
</html>