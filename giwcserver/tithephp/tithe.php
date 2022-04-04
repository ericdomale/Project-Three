<?php
session_start(); 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}


function load_firstname(){
    $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
    $output = '';
    $query = "SELECT DISTINCT firstName FROM membership ORDER BY memberno ASC";
    $queryrun = mysqli_query($conn,$query);

    $mid = 0;

    while($row =mysqli_fetch_array($queryrun))
    {
      $output .= '<option value="'.$row["firstName"].'">'.$row["firstName"].'</option>';
    }
    return $output;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Tithe</title>
    <link rel="stylesheet" href="tithe.css">
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../adminboard/adminboard.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/account-pin-circle-line.svg"><span>Member Tithes.</span></h3>
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
        <button class="tablink" onclick="openPage('Individual', this,'white')" id="active">Individual</button>
        <button class="tablink" onclick="openPage('Joint', this, 'white')">Joint</button>
        <br>
        <div id="Individual" class="tabcontent">
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
            <form method="POST" action="conntithe.php">
            <div>
              <label hidden>Tithe ID</label><label  class="validation-error hide" required> required </label>
              <!-- <input type="hidden" name="tid" id="tid"> -->
           </div>
            <div>
              <label>Member No.</label><label  class="validation-error hide" required> required </label>
              <input type="text" name="tmid" id="tmid" readonly>
           </div>
           <div>
               <label>First Name</label>
               <select name="firstName" class="firstName" id="firstName">
                 <option>--Select One--</option>
                 <?php echo load_firstname(); ?>
                </select>
            </div> 
            <div>
               <label>Surname</label>
               <select name="surname" class="surname" id="surname">
                 <option>--Select One--</option>
                </select>
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
                           <option label="N/A" value="N/A"></option>
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
                    <?php require 'tithedisplay.php' ?>
                </table>
            </td>
            </form>
        </table>
        </div>







        <!--JOINT TITHES-->

        <div id="Joint" class="tabcontent">
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
            <form method="POST" action="joint.php">
            <div>
              <label hidden>Tithe ID</label><label  class="validation-error hide" required> required </label>
              <input type="hidden" name="jid" id="jid">
           </div>
           <div>
              <label>Member No.</label><label  class="validation-error hide" required> required </label>
              <input type="text" name="tmid1"  id="tmid1" readonly>
           </div>
           <div>
               <label>First Name</label>
               <select name="firstName" class="firstName" id="firstName">
                 <option>--Select One--</option>
                 <?php echo load_firstname(); ?>
                </select>
            </div> 
            <div>
               <label>Surname</label>
               <select name="surname" class="surname" id="surname1">
                 <option>--Select One--</option>
                </select>
            </div> 
            <hr>  
            <div>
              <label>Member No.</label><label  class="validation-error hide" required> required </label>
              <input type="text" name="tmid2" id="tmid2" readonly>
           </div>
            <div>
               <label>First Name</label>
               <select name="firstName" class="firstName">
                 <option>--Select One--</option>
                 <?php echo load_firstname(); ?>
                </select>
            </div> 
            <div>
               <label>Surname</label>
               <select name="surname" class="surname" id="surname2">
                 <option>--Select One--</option>
                </select>
            </div>   
                                       
                <label>Payment Date</label>
                        <input type="date" name="jdate" id="jdate">
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
                       <select name="jmonth" id="jmonth">
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
                        <input type="text" name="jamount" id="jamount">
                    </div>
                    <div>
                        <label>Others</label>
                       <select name="jothers" id="jothers">
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
                       <select name="jotmonth" id="jotmonth">
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
                        <input type="text" name="jotamount" id="jotamount">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="jointsubmit" type="submit" value="Submit">
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
                            <th>JOINT NAME</th> 
                            <th>JOINT NAME</th>                        
                            <th>PAYMENT DATE</th>
                            <th>TITHE TYPE</th>
                            <th>ACTIONS</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <?php require 'jointdisplay.php' ?>
                </table>
            </td>
            </form>
        </table>
        </div>




        <script src="../jquery-3.6.0.min.js"></script>
        <script type="text/javascript">



         
         $(document).ready(function(){
             $('.firstName').change(function(){
                   var mid = $(this).val();
                   $.ajax({
                       url:"fetchsurname.php",
                       method:"POST",
                       data:{MemberNo:mid},
                       dataType:"text",
                       success:function(data)
                       {
                           $('.surname').html(data);
                       }
                   });
             });

             $('#surname').change(function(){
                 $('#tmid').val($('#surname').find(':selected').val());
             });

             $('#surname1').change(function(){
                 $('#tmid1').val($('#surname1').find(':selected').val());
             });

             $('#surname2').change(function(){
                 $('#tmid2').val($('#surname2').find(':selected').val());
             });
         });





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
                    url:"tithetype.php",
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





        function openPage(pageName, element, color){
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for(i = 0; i < tabcontent.length; i++){
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablink");
        for(i =0; i < tablinks.length; i++){
            tablinks[i].style.backgroundColor = "";
        }

        document.getElementById(pageName).style.display = "block";
        element.style.backgroundColor = color;
        }
        document.getElementById("active").click();
    </script>

    
</body>
</html>