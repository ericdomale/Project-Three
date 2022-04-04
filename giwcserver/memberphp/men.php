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
  <link rel="manifest" href="/site.webmanifest">
    <title>Membership</title>
    <link rel="stylesheet" href="membership.css">
    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>
<body>
    <header>
        <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../offeringphp/offering.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/account-pin-box-fill.svg"><span>Membership.</span></h3>
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
          
    
                        <form action="connect.php" method="POST">
                         <div>
                             <label hidden> No.</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="memberno" id="memberno">
                          </div>
                          <div>
                             <label>Member No.</label><label  class="validation-error hide" required> required </label>
                             <input type="text" name="mid" id="mid">
                          </div>
                          <div>
                              <label>First Name</label><label class="validation-error hide" required>This field is required.</label>
                              <input type="text" name="firstName" id="firstName" >
                          </div>
                          <div>
                              <label>Surname</label>
                              <input type="text" name="surname" id="surname">
                          </div>
                          <div>
                           <div>
                              <label>D.O.B</label>
                              <input type="date" name="date" id="date">
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
                              <input type="number" name="mobile" id="mobile">
                          </div>
                          <div>
                              <label>Residential Address</label>
                              <input type="text" name="maddress" id="maddress">
                          </div>
                          <div>
                              <label>Postal Address</label>
                              <input type="text" name="paddress" id="paddress">
                          </div>
                          <div>
                              <label>Occupation</label>
                              <input type="text" name="work" id="work">
                          </div>
                          <div>
                            <label>Church Group One</label>
                            <select name="group1" id="group1">
                                <option>--Select One--</option>
                                <option  name="Mighty Men" value="Mighty Men">Mighty Men</option>
                                <option  name="Impact Ladies" label="Impact Ladies" value="Impact Ladies"></option>
                                <option  name="Deacons" label="Deacons" value="Deacons"></option>
                                <option  name="Ramah Praise" label="Ramah Praise" value="Ramah Praise"></option>
                                <option  name="Youth" label="Youth" value="Youth"></option>
                                <option  name="Staff" label="Staff" value="Staff"></option>
                                <option  name="Ushers" label="Ushers" value="Ushers"></option>
                                <option  name="Caring Hearts" label="Caring Hearts" value="Caring Hearts"></option>
                                <option  name="Events" label="Events" value="Events"></option>
                            </select>
                          </div>
                          <div>
                            <label>Church Group Two</label>
                            <select name="group2" id="group2">
                                <option>--Select One--</option>
                                <option  name="Mighty Men" value="Mighty Men">Mighty Men</option>
                                <option  name="Impact Ladies" label="Impact Ladies" value="Impact Ladies"></option>
                                <option  name="Deacons" label="Deacons" value="Deacons"></option>
                                <option  name="Ramah Praise" label="Ramah Praise" value="Ramah Praise"></option>
                                <option  name="Youth" label="Youth" value="Youth"></option>
                                <option  name="Staff" label="Staff" value="Staff"></option>
                                <option  name="Ushers" label="Ushers" value="Ushers"></option>
                                <option  name="Caring Hearts" label="Caring Hearts" value="Caring Hearts"></option>
                                <option  name="Events" label="Events" value="Events"></option>
                                <option  name="N/A" label="N/A" value="N/A"></option>
                            </select>
                          </div>
                          <div>
                              <label>Chapel Group</label>
                             <select name="chapel" id="chapel">
                                 <option>--Select One--</option>
                                 <option name="FaithChapel" value="Faith Chapel">Faith Chapel</option>
                                 <option name="LoveChapel" label="Love Chapel" value="Love Chapel"></option>
                                 <option name="JoyChapel" label="Joy Chapel" value="Joy Chapel"></option>
                                 <option name="GraceChapel" label="Grace Chapel" value="Grace Chapel"></option>
                             </select>
                          </div>
                          <div>
                              <label>Member Since</label>
                              <input type="text" name="since" id="since">
                          </div>
                          <div class="form-action-buttons">
                           <input name="submit" type="submit" value="Submit">
                          </div>
                        </form>
                        <br>  
                        <td>
                        <table class="list" id="memberList" name="memberList">
                            <div method="POST" action="men.php" >
                                <input type="search" name="searchbar" id="search"  placeholder="Search Member..."/>
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
                                    <thead  id="show">
                                        <tr>
                                            <th>ID</th>
                                            <th>Member ID</th>
                                            <th>First Name</th>
                                            <th>Surname</th>
                                            <th>Gender</th>
                                            <th>Contact No.</th>
                                            <th>Actions</th>
                                            <th></th>
                                            <th></th>
                                        </tr> 
                                    </thead>
                                    
                                    <tbody>
                                    <?php require 'fetch.php' ?>
                                    </tbody>
                                   
                                    
                                   
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
                    url:"genderfetch.php",
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

