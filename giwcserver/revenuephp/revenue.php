
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
    <title>Revenue</title>
    <link rel="stylesheet" href="revenue.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../eventsphp/event.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/wallet-3-fill.svg"><span>Revenue.</span></h3>
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
         <form method="POST" action="revconnect.php" autocomplete="off">
                          <div>
                             <label hidden>Revenue ID</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="revid" id="revid">
                          </div>
                    <div>
                        <label>Week</label><label class="validation-error hide" id="dateValidationError">This field is required.</label>
                        <input type="week" name="revweek" id="revweek">
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" name="revdate" id="revdate">
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="revmonth" id="revmonth">
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
                       <select name="revtype" id="revtype">
                           <option>--Select One--</option>
                           <option label="Offering" value="Offering"></option>
                           <option label="Pledges" value="Pledges"></option>
                           <option label="Project Offering" value="Project Offering"></option>
                           <option label="Tithes" value="Tithes"></option>
                           <option label="Sacrifices" value="Sacrifices"></option>
                           <option label="Donations" value="Donations"></option>
                           <option label="Seed Offering" value="Seed Offering"></option>
                           <option label="Others" value="Others"></option>
                       </select>
                    </div>
                    <div>
                        <label>Revenue Amount</label>
                        <input type="text" name="revamount" id="revamount">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="revsubmit" type="submit" value="Submit">
                    </div>
                </form>
                <br>
            <td>
                 <table class="list" id="revenuelist">
                    <div>
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Revenue..." />
                     <input type="submit" name="filter" id="filter" value="Search">
                    </div>
                    <form method="POST" action="revenuepdf.php">
                <div class="save-buttons">
                <button type="submit" name="revenuepdf" value="PDF" class="adobe"><img src="../giwcpage/pngicons/adobe.png" class="png">PDF</button>
                </div>
                </form>           
                <form method="POST" action="revenuexls.php">
                <div class="save-buttons">
                <button type="submit" name="revenuexls" value="Excel"><img src="../giwcpage/pngicons/excel.png" class="png">Excel</button>
                </div>
                </form> 
                </form method="GET" action="">             
                <div>
                    <input type="date" name="fromdate" id="fromdate">
                 </div>
                <div>
                    <input type="date" name="todate" id="todate">
                </div> 
                <button type="submit" name="datefilter" id="dfilter" class="datefilter" value="Filter">Filter</button>
                </form>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Week</th>
                            <th>Date</th>
                            <th>Month</th>
                            <th>Revenue Type</th>
                            <th>Revenue Amount</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">
                    <?php require 'revdisplay.php' ?>
                    </tbody>
                </table>
                <br>
                     
            </td>
        </table>
        <script src="../jquery-3.6.0.min.js"></script>
        <script src="../jquery-ui.min.js"></script>
        <script type="text/javascript">

/*function up()
{
    xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","revfetch.php?revmonth="+document.getElementById("search").value,false);
    xmlhttp.send(null);
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    
}*/
$(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#revenuelist tr').each(function(){
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





    

        $(document).ready(function(){
            $(function(){
               $("fromdate").datepicker();
               $("todate").datepicker();
            });
            $('#dfilter').click(function(){
               var fromdate = $('#fromdate').val();
               var todate = $('#todate').val();
               if (fromdate != '' && todate != '')
               {
                   $.ajax({
                       url:"revenuedate.php",
                       method:"POST",
                       data:{fromdate:fromdate, todate:todate},
                       success:function(data)
                       {
                           $('#revenuelist').html(data);
                       }
                   });
               }
               else
               {
                   alert("Please Select Date");
               }
            });
        });
        

</script>
    
</body>
</html>