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
    <title>Affiliate Tithe</title>
    <link rel="stylesheet" href="afftithe.css">
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../memberphp/men.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/group-2-line.svg"><span>Affiliate Tithes.</span></h3>
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
            <form method="POST" action="afftitheconn.php">
            <div>
              <label hidden>Tithe ID</label><label  class="validation-error hide" required> required </label>
              <input type="hidden" name="tid" id="tid">
           </div>
            <div>
              <label>Affiliate No.</label><label  class="validation-error hide" required> required </label>
              <input type="text" name="titheno" id="titheno">
           </div>
           <div>
               <label>First Name</label><label class="validation-error hide" required>This field is required.</label>
               <input type="text" name="firstname" id="firstname">
           </div>
           <div>
               <label>Surname</label>
               <input type="text" name="surname" id="surname">
           </div>
                                       
                <label>Payment Date</label>
                        <input type="date" name="pdate" id="pdate">
                    </div>
                    <div>
                        <label>Tithe Type</label>
                       <select name="titype" id="titype">
                           <option>--Select One--</option>
                           <option value="Personal">Personal</option>
                           <option label="Company" value="Company"></option>
                           <option label="N/A" value="N/A"></option>
                       </select>
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="pmonth" id="pmonth">
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
                        <label>Amount Paid</label>
                        <input type="text" name="pamount" id="pamount">
                    </div>
                    <div>
                        <label>Others</label>
                       <select name="others" id="others">
                           <option>--Select One--</option>
                           <option value="Pledge">Pledge</option>
                           <option label="Project Offering" value="Project Offering"></option>
                           <option label="Donation" value="Donation"></option>
                           <option label="Seed Offering" value="Seed Offering"></option>
                           <option label="First Fruit" value="First Fruit"></option>
                           <option label="Thanksgiving" value="Thanksgiving"></option>
                           <option label="Sacrifice Offering" value="Sacrifice Offering"></option>
                           <option label="N/A" value="N/A"></option>
                       </select>
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="otmonth" id="otmonth">
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
                        <label>Amount Paid</label>
                        <input type="text" name="otamount" id="otamount">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="titsubmit" type="submit" value="Submit">
                    </div>
                    <br>
            <td>
                <table class="list" id="titherecord">
                    <div>
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Tithes..." />
                     <input type="submit" name="filter" id="filter" value="Search">
                    </div>
                    <form method="POST" action="memberpdf.php">
                            <div class="save-buttons">
                            <button type="submit" name="pdflist" value="PDF" class="adobe"><img src="../giwcpage/pngicons/adobe.png" class="png">PDF</button>
                            </div>
                            </form>
                           
                            <form method="POST" action="xlsmember.php">
                            <div class="save-buttons">
                            <button type="submit" name="excelist" value="Excel"><img src="../giwcpage/pngicons/excel.png" class="png">Excel</button>
                            </div>
                            </form>
                            <div id="filters">
                                <select name="fetchval" id="fetchval">
                                <option value="" disabled="" selected="">Tithe Type</option>
                                <option value="Personal">Personal</option>
                                <option label="Company" value="Company"></option>
                                </select>
                            </div>   
                             
                    <thead>
                        <tr><th>ID</th>
                            <th>FIRST NAME</th>
                            <th>SURNAME</th>                        
                            <th>PAYMENT DATE</th>
                            <th>TITHE TYPE</th>
                            <th>ACTIONS</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <?php require 'afftithedisplay.php' ?>
                </table>
            </td>
            </form>
        </table>
        <script src="../jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#titherecord tr').each(function(){
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
                    url:"afftithetype.php",
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