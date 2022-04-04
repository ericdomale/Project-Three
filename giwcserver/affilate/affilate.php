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
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
  <link rel="manifest" href="../site.webmanifest">
    <title>Affiliate</title>
    <link rel="stylesheet" href="affilate.css">
    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>
<body>
    <header>
        <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../affilate/afftithe.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/group-2-fill.svg"><span>Affiliates.</span></h3>
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
          
    
                        <form action="affconnect.php" method="POST">
                         <div>
                             <label hidden>Affiliate No.</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="affno" id="affno">
                          </div>
                          <div>
                              <label>First Name</label><label class="validation-error hide" required>This field is required.</label>
                              <input type="text" name="firstname" id="firstname" >
                          </div>
                          <div>
                              <label>Surname</label>
                              <input type="text" name="surname" id="surname">
                          </div>
                          <div>
                           <div>
                              <label>D.O.B</label>
                              <input type="date" name="affdate" id="affdate">
                          </div>
                          <div>
                              <label>Gender</label>
                             <select name="gender" id="gender" class="gen">
                                 <option>--Select One--</option>
                                 <option value="Male" name="male" class="male">Male</option>
                                 <option label="Female" value="Female" name="female" class="female"></option>
                             </select>
                          </div>
                          <div>
                              <label>Status</label>
                             <select name="status" id="status">
                                 <option>--Select One--</option>
                                 <option name="Single"  value="Single">Single</option>
                                 <option name="Married" label="Married" value="Married"></option>
                                 <option name="Divorced" label="Divorced" value="Divorced"></option>
                                 <option name="Widow" label="Widow" value="Widow"></option>
                                 <option name="Widower" label="Widower" value="Widower"></option>
                             </select>
                          </div>
                          <div>
                              <label>Email</label>
                              <input type="email" name="email" id="email">
                          </div>
                          <div>
                              <label>Contact No.</label>
                              <input type="number" name="affmobile" id="affmobile">
                          </div>
                          <div>
                              <label>Address</label>
                              <input type="text" name="affaddress" id="affaddress">
                          </div>
                          <div>
                              <label>City/Town</label>
                              <input type="text" name="city" id="city">
                          </div>
                          <div>
                              <label>Affiliate Since</label>
                              <input type="date" name="affsince" id="affsince">
                          </div>
                          <div class="form-action-buttons">
                           <input name="submit" type="submit" value="Submit">
                          </div>
                        </form>
                        <br>  
                        <td>
                        <table class="list" id="memberList" name="memberList">
                    <div>
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Affiliates..." />
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
                                <option value="" disabled="" selected="">Gender</option>
                                <option value="Male" name="male" class="male">Male</option>
                                <option label="Female" value="Female" name="female" class="female"></option>
                                </select>
                            </div>         
                             
                    <thead>
                        <tr><th>ID</th>
                            <th>FIRST NAME</th>
                            <th>SURNAME</th>                        
                            <th>GENDER</th>
                            <th>CONTACT NO.</th>
                            <th>ACTIONS</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <?php require 'affilatefetch.php' ?>
                </table>
                            <br>
                        
                        </td>  
                    </table>
                    <script src="../jquery-3.6.0.min.js"></script>
        <script type="text/javascript">


        $(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#memberList tr').each(function(){
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
                    url:"genderaffilate.php",
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

