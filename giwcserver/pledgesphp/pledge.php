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
    <title>Pledges</title>
    <link rel="stylesheet" href="pledge.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev"   onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../tithephp/tithe.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/medal-fill.svg"><span>Pledges.</span></h3>
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
        <form method="POST" action="pledgeconn.php" autocomplete="off">
                    <div>
                        <label hidden>Pledger ID</label><label class="validation-error hide">This field is required.</label>
                        <input type="hidden" name="pdgid" id="pdgid">
                    </div>
                    <div>
                        <label>Pledger Name</label><label class="validation-error hide">This field is required.</label>
                        <input type="text" name="pdgname" id="pdgname">
                    </div>
                    <div>
                        <label>Event/Program</label>
                       <select name="pdgory" id="pdgory">
                        <option>--Select One--</option>
                        <option label="Sunday Service" value="Sunday Service"></option>
                        <option label="Anointing Service" value="Anointing Service"></option>
                        <option label="Thanksgiving Service" value="Thanksgiving Service"></option>
                        <option label="Special Service" value="Special Service"></option>
                        <option label="Tuesday Service" value="Tuesday Service"></option>
                        <option label="Friday Night Service" value="Friday Night Service"></option>
                       </select>
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" name="pgdate" id="pgdate">
                    </div>
                    <div>
                        <label>Current Status</label>
                       <select name="pdgstatus" id="pdgstatus">
                           <option>--Select One--</option>
                           <option label="Paid" value="Paid"></option>
                           <option label="Unpaid" value="Unpaid"></option>
                       </select>
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="pdgmonth" id="pdgmonth">
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
                        <label>Amount Pledged</label>
                        <input type="text" name="pdgamount" id="pdgamount">
                    </div>
                    <div class="form-action-buttons">
                        <input name="pdgsubmit" type="submit" value="Submit">
                    </div>
                </form>
                <br>
            <td>
                <table class="list" id="pledgelist">
                    <div>
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Pledges..." />
                     <input type="submit" name="filter" id="filter" value="Search">
                    </div>
                    <form method="POST" action="pledgepdf.php">
                        <div class="save-buttons">
                        <button type="submit" name="pledgepdf" value="PDF" class="adobe"><img src="../giwcpage/pngicons/adobe.png" class="png">PDF</button>
                        </div>
                        </form>
                                
                        <form method="POST" action="pledgexls.php">
                        <div class="save-buttons">
                        <button type="submit" name="pledgexls" value="Excel"><img src="../giwcpage/pngicons/excel.png" class="png">Excel</button>
                        </div>
                   </form> 
                   <div id="filters">
                                <select name="fetchval" id="fetchval">
                                <option value="" disabled="" selected="">Status</option>
                                <option label="Paid" value="Paid"></option>
                                <option label="Unpaid" value="Unpaid"></option>
                                </select>
                            </div>             
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pledger Name</th>
                            <th>Pledge Category</th>
                            <th>Date</th>
                            <th>Current Status</th>
                            <th>Month</th>
                            <th>Amount Pledged</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">

                    </tbody>
                    <?php require 'pledgedisplay.php' ?>
                </table>
                <br>
                 
            </td>
        </table>
        <script src="../jquery-3.6.0.min.js"></script>
<script type="text/javascript">

/*function up()
{
    xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","pledgefetch.php?pdgname="+document.getElementById("search").value,false);
    xmlhttp.send(null);
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    
}*/

$(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#pledgelist tr').each(function(){
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
            $("#fetchval").on('change',function(){
                var value = $(this).val();

                $.ajax({
                    url:"pledgestatus.php",
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