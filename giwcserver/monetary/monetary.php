<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monetary</title>
    <link rel="stylesheet" href="monetary.css">
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../eventsphp/event.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/currency-line.svg"><span>Monetary.</span></h3>
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
        <br>
        <table>
                  <?php
                     if (isset($_SESSION['success']) && $_SESSION['success'] !='')
                    {
                        echo '<h2 class="success"> '.$_SESSION['success'].' </h2>';
                        unset($_SESSION['success']);
                    } 
                    if (isset($_SESSION['status']) && $_SESSION['status'] !='')
                    {
                        echo '<h2 class="status"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    } 
                    ?>
         <form method="POST" action="monetaryconn.php" autocomplete="off">
                          <div>
                             <label hidden>Monetary ID</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="monid" id="monid">
                          </div>
                    <div>
                        <label>Week</label><label class="validation-error hide" id="dateValidationError">This field is required.</label>
                        <input type="week" name="monweek" id="monweek">
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" name="mondate" id="mondate">
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="monetmonth" id="monetmonth">
                           <option>--Select One--</option>
                           <option value="January">January</option>
                           <option label="February" value="February"></option>
                           <option label="March" value="March"></option>
                           <option label="April" value="April"></option>
                           <option label="May" value="May"></option>
                           <option label="June" value="June"></option>
                           <option label="July" value="July"></option>
                           <option label="August" value="August"></option>
                           <option label="September" value="September"></option>
                           <option label="October" value="October"></option>
                           <option label="November" value="November"></option>
                           <option label="December" value="December"></option>
                       </select>
                    </div>
                    <div>
                        <label>Revenue Type</label>
                       <select name="montype" id="montype">
                       <option>--Select One--</option>
                            <option name="Sunday Offering" value="Sunday Offering">Sunday Offering</option>
                            <option name="Tithes" value="Tithes">Tithes</option>
                            <option name="Donations" value="Donations">Donations</option>
                            <option name="Pledges" value="Pledges">Pledges</option>
                            <option label="Project Offering" value="Project Offering"></option>
                            <option name="Seed Offering" label="Seed Offering" value="Seed Offering">Seed Offering</option>
                            <option name="Thanksgiving" label="Thanksgiving" value="Thanksgiving">Thanksgiving</option>
                            <option name="Special Offering" label="Special Offering" value="Special Offering">Special Offering</option>
                            <option name="First Fruit" label="First Fruit" value="First Fruit">First Fruit</option>
                            <option name="Sacrifice Offering" label="Sacrifice Offering" value="Sacrifice Offering">Sacrifice Offering</option>
                            <option name="Tuesday Offering" value="Tuesday Offering">Tuesday Offering</option>
                            <option name="Friday Night Offering" value="Friday Night Offering">Friday Night Offering</option>
                            <option label="Others" value="Others"></option>
                       </select>
                    </div>
                    <div>
                            <label>Program</label>
                        <select name="monprogram" id="monprogram">
                            <option>--Select One--</option>
                            <option name="Sunday Service" label="Sunday Service" value="Sunday Service">Sunday Service</option>
                            <option name="Anointing Service" label="Anointing Service" value="Anointing Service">Anointing Service</option>
                            <option name="Thanksgiving Service" label="Thanksgiving Service" value="Thanksgiving Service">Thanksgiving Service</option>
                            <option name="Special Service" label="Special Service" value="Special Service">Special Service</option>
                            <option name="Tuesday Service" label="Tuesday Service" value="Tuesday Service">Tuesday Service</option>
                            <option name="Friday Night Service" label="Friday Night Service" value="Friday Night Service">Friday Night Service</option>
                        </select>
                        </div>
                    <div>
                        <label>Amount</label>
                        <input type="text" name="monamount" id="monamount">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="monsubmit" type="submit" value="Submit">
                    </div>     
                </form>
                <br>

</body>
</html>