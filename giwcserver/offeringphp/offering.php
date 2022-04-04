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
    <title>
        Offerings
    </title>
    <link rel="stylesheet" href="offering.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../expensesphp/expenses.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/hand-coin-line.svg"><span>Offerings & Tithes.</span></h3>
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
            <form action="offconnect.php" method="POST" autocomplete="off">
                          <div>
                             <label hidden>Offering ID</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="offid" id="offid">
                          </div>
                        <div>
                            <label>Week</label><label class="validation-error hide" required></label>
                            <input type="week" name="offweek" id="offweek" required>
                        </div>
                        <div>
                            <label>Date</label>
                            <input type="date" name="offdate" id="offdate">
                        </div>
                        <div>
                            <label>Program</label>
                        <select name="offprogram" id="offprogram">
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
                            <label>Offering Type</label>
                        <select name="offertype" id="offertype">
                            <option>--Select One--</option>
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
                            <input type="text" name="ofamount" id="ofamount">
                        </div>
                        <div>
                            <label>Tithe Amount</label>
                            <input type="text" name="thamount" id="thamount">
                        </div>
                        <div class="form-action-buttons">
                            <input name="offsubmit" type="submit" value="Submit">
                        </div>
                    </form>
                    <br>
            <td>
                <table class="list" id="employeeList">
                    <div method="POST" action="offering.php">
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Offering..." />
                     <input type="submit" name="filter" id="filter" value="Search">
                    </div>
                    <form method="POST" action="offeringpdf.php">
                        <div class="save-buttons">
                        <button type="submit" name="pdflist" value="PDF" class="adobe"><img src="../giwcpage/pngicons/adobe.png" class="png">PDF</button>
                        </div>
                        </form>
                                
                        <form method="POST" action="xlsoffering.php">
                        <div class="save-buttons">
                        <button type="submit" name="offeringxls" value="Excel"><img src="../giwcpage/pngicons/excel.png" class="png">Excel</button>
                        </div>
                    </form> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Week</th>
                            <th>Date</th>
                            <th>Program</th>
                            <th>Offering Type</th>
                            <th>Offering Amount</th>
                            <th>Tithe Amount</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">

                    </tbody>
                    <?php require 'offdisplay.php' ?>
                </table>
                <br>
                                  
            </td>
        
        <script src="../jquery-3.6.0.min.js"></script>
        <script type="text/javascript">

/*function up()
{
    xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","offetch.php?offprogram="+document.getElementById("search").value,false);
    xmlhttp.send(null);
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    
}*/
$(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#employeeList tr').each(function(){
                var found = 'false';
                $(this).each(function(){
                    if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                    {
                        found = 'true';
                    }
                });
                if (found == 'true')
                {
                    $(this).show();
                }
                else
                {
                    $(this).hide();
                }

            });
        }

        });

</script>
</body>
</html>
    