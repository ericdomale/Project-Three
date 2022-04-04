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
    <title>Events & Programs</title>
    <link rel="stylesheet" href="event.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../staffphp/staff.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/calendar-todo-fill.svg"><span>Events & Programs.</span></h3>
          </div>
          <div class="right_area">
            <a  href="../maindashphp/maindash.php" class="home_btn"><?php echo $_SESSION['username'];?></a>
          </div>
          <div class="right_area">
            <a  href="../loginphp/login.php" class="logout_btn">Logout</a>
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
        <form method="POST" action="eventconn.php" autocomplete="off">
                    <div>
                       <label hidden>Event ID</label><label class="validation-error hide">This field is required.</label>
                       <input type="hidden" name="eventid" id="eventid">
                    </div>
                   <div>
                       <label>Event Name</label><label class="validation-error hide">This field is required.</label>
                       <input type="text" name="eventname" id="eventname">
                    </div>
                    <div>
                        <label>Date From</label><label class="validation-error hide" id="firstNameValidationError">This field is required.</label>
                        <input type="date" name="fdate" id="fdate">
                    </div>
                    <div>
                        <label>To</label>
                        <input type="date" name="todate" id="todate">
                    </div>
                    <div>
                     <div>
                        <label>Event Time</label>
                        <input type="time" name="eventtime" id="eventtime">
                    </div>
                    <div>
                        <label>Guest Speakers</label>
                        <input type="text" name="speakers" id="speakers">
                    </div>
                    <div>
                        <label>Event Income</label>
                        <input type="text" name="eincome" id="eincome" required>
                   </div>
                    <div class="form-action-buttons">
                        <input name="eventsubmit" type="submit" value="Submit">
                    </div>
                </form>
                <br>
            <td>
                <table class="list" id="eventlist"> 
                    <div method="POST" action="event.php">
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Events..." />
                     <input type="submit" name="filter" id="filter" value="Search">
                    </div>
                    <br>
                    <form method="POST" action="eventpdf.php">
                        <div class="save-buttons">
                        <button type="submit" name="eventpdf" value="PDF" class="adobe"><img src="../giwcpage/pngicons/adobe.png" class="png">PDF</button>
                        </div>
                        </form>
                                
                        <form method="POST" action="eventxls.php">
                        <div class="save-buttons">
                        <button type="submit" name="eventxls" value="Excel"><img src="../giwcpage/pngicons/excel.png" class="png">Excel</button>
                        </div>
                    </form>      
                    <thead>
                        <tr> 
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Date From</th>
                            <th>Date End</th>
                            <th>Event Time</th>
                            <th>Guest Speakers</th>
                            <th>Event Income</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">
                                             
                    </tbody>
                    <?php require 'eventdisplay.php' ?>
                </table>
                <br>
                       
            </td>
        </table>
        <script src="../jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
        

/*function up()
{
    xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","eventfetch.php?eventname="+document.getElementById("search").value,false);
    xmlhttp.send(null);
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    
}*/

$(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#eventlist tr').each(function(){
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