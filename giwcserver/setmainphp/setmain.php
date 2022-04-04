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
    <title>Settings</title>
    <link rel="stylesheet" type="text/css" href="setmain.css">
</head>
<body>
    <header>
        <div class="left_area">
            <h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../checkerphp/index.html"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/file-settings-fill.svg"><span>Settings.</span></h3>
          </div>
          <div class="right_area">
            <a  href="../settingsphp/settings.php" class="home_btn"><?php echo $_SESSION['username'];?></a>
          </div>
          <form action="../loginphp/logout.php" method="POST">
            <button name="logout_btn" class="logout_btn">Logout</button>
            </form>
    </header>
    <br>
    <br>
    <div class="container">
        <a href="../adminusers/adminusers.php" class="box" >
            <div class="icon">
                <img class="img" src="../svg/shield-keyhole-fill.svg">
            </div>
            <div class="content">
                <h3>Adminusers.</h3>
                <p>Control of Roles and Access to Records and Database.</p>
            </div>
        </a>
        <!--<a  href="../offeringphp/offering.php"class="box">
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
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
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
        <a href="../settingsphp/settings.php" class="box">
            <div class="icon">
                <img class="img" src="../svg/settings-4-line.svg">
            </div>
            <div class="content">
                <h3>Settings & More</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut, adipisci.</p>
            </div>
        </a>-->
  </div>
    

    
    
</body>
</html>