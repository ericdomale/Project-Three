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
    <title>Monetary Records</title>
    <link rel="stylesheet" href="monetary.css">
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <!--<h3><a href="../eventsphp/event.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>-->
            <h3><img class="image" src="../svg/currency-line.svg"><span>Monetary Records.</span></h3>
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
     
            <td>
                 <table class="list" id="revenuelist">
                    <div>
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Records..." />
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
                <div id="filters">
                                <select name="fetchval" id="fetchval">
                                <option value="" disabled="" selected="">--Filter--</option>
                                <option name="Sunday Offering" value="Sunday Offering">Sunday Offering</option>
                            <option name="Tithes" value="Tithes">Tithes</option>
                            <option name="Donations" value="Donations">Donations</option>
                            <option name="Pledges" value="Pledges">Pledges</option>
                            <option name="Project Offering" value="Project Offering">Project Offering</option>
                            <option name="Seed Offering" label="Seed Offering" value="Seed Offering">Seed Offering</option>
                            <option name="Thanksgiving" label="Thanksgiving" value="Thanksgiving">Thanksgiving</option>
                            <option name="Special Offering" label="Special Offering" value="Special Offering">Special Offering</option>
                            <option name="First Fruit" label="First Fruit" value="First Fruit">First Fruit</option>
                            <option name="Sacrifice Offering" label="Sacrifice Offering" value="Sacrifice Offering">Sacrifice Offering</option>
                            <option name="Tuesday Offering" value="Tuesday Offering">Tuesday Offering</option>
                            <option name="Friday Night Offering" value="Friday Night Offering">Friday Night Offering</option>
                            <option name="Others" value="Others">Others</option>
                                </select>
                            </div>  
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
                            <th>Program</th>
                            <th>Amount</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">
                    <?php require 'monetarydisplay.php' ?>
                    </tbody>
                </table>
                <br>
                     
            </td>
        </table>
        <script src="../jquery-3.6.0.min.js"></script>
        <script src="../jquery-ui.min.js"></script>
        <script type="text/javascript">



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
                       url:"monetarydate.php",
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
        


        $(document).ready(function(){
            $("#fetchval").on('change',function(){
                var value = $(this).val();

                $.ajax({
                    url:"monetaryfetch.php",
                    type:"POST",
                    data:'request=' + value,
                    beforeSend:function(){
                       $(".list").html("<span>Working...</span>"); 
                    },
                    success:function(data){
                        $(".list").html(data);
                    }
                });

            });
        });

</script>
    
</body>
</html>