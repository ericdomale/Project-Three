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
    <title>Adminusers</title>
    <link rel="stylesheet" href="adminusers.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev" onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../affilate/affilate.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/shield-keyhole-fill.svg"><span>Adminusers.</span></h3>
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
         <form method="POST" action="adminconnect.php" autocomplete="off">
                          <div>
                             <label hidden>ID</label><label  class="validation-error hide" required> required </label>
                             <input type="hidden" name="adid" id="adid">
                          </div>
                    <div>
                        <label>Username</label><label class="validation-error hide" id="dateValidationError">This field is required.</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="cfpassword" id="cfpassword">
                    </div>
                    <div class="form-action-buttons">
                        <input  name="adsubmit" type="submit" value="Submit">
                    </div>
                </form>
                <br>
            <td>
                 <table class="list" id="revenuelist">
                    
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
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">
                    <?php require 'adminfetch.php' ?>
                    </tbody>
                </table>
                <br>
                     
            </td>
        </table>
        <script src="../jquery-3.6.0.min.js"></script>
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
        

</script>
    
</body>
</html>