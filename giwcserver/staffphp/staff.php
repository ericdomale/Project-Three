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
    <title>Staff</title>
    <link rel="stylesheet" href="staff.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>
<body>
<header>
        <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../pledgesphp/pledge.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/team-fill.svg"><span>Staff Workers.</span></h3>
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
        <form method="POST" action="staffconnect.php" autocomplete="off">
                   <div>
                       <label hidden>Staff No.</label><label class="validation-error hide">This field is required.</label>
                       <input type="hidden" name="staffno" id="staffno">
                    </div>
                    <div>
                        <label>First Name</label><label class="validation-error hide" id="firstNameValidationError" required >This field is required.</label>
                        <input type="text" name="stfname" id="stfname" required>
                    </div>
                    <div>
                        <label>Surname</label>
                        <input type="text" name="surname" id="surname">
                    </div>
                    <div>
                     <div>
                        <label>D.O.B</label>
                        <input type="date" name="stfdate" id="stfdate">
                    </div>
                    <div>
                        <label>Gender</label>
                       <select name="gender" id="gender">
                           <option>--Select One--</option>
                           <option value="Male">Male</option>
                           <option label="Female" value="Female"></option>
                       </select>
                    </div>
                    <div>
                        <label>Status</label>
                       <select name="status" id="status">
                           <option>--Select One--</option>
                           <option value="Single">Single</option>
                           <option label="Married" value="Married"></option>
                           <option label="Divorced" value="Divorced"></option>
                           <option label="Widow" value="Widow"></option>
                           <option label="Widower" value="Widower"></option>
                       </select>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="stfemail" id="stfemail">
                    </div>
                    <div>
                        <label>Contact No.</label>
                        <input type="number" name="stfmobile" id="stfmobile">
                    </div>
                    <div>
                              <label>Address</label>
                              <input type="text" name="stfaddress" id="stfaddress">
                          </div>
                    <div>
                        <label>City</label>
                        <input type="text" name="stfcity" id="stfcity">
                    </div>
                    <div>
                        <label>Job Description</label>
                        <input type="text" name="jobdesc" id="jobdesc" required>
                    </div>
                    <div>
                        <label>Chapel Group</label>
                       <select name="chapel" id="chapel">
                           <option>--Select One--</option>
                           <option value="Faith Chapel">Faith Chapel</option>
                           <option label="Love Chapel" value="Love Chapel"></option>
                           <option label="Joy Chapel" value="Joy Chapel"></option>
                           <option label="Grace Chapel" value="Grace Chapel"></option>
                       </select>
                    </div>
                    <div>
                        <label>Employed Since</label>
                        <input type="date" name="empsince" id="empsince">
                    </div>
                    <div class="form-action-buttons">
                        <input name="stfsubmit" type="submit" value="Submit">
                    </div>
                </form>
                <br>
            <td>
                <table class="list" id="stafflist">
                    <div method="POST" action="staff.php">
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Worker..." />
                     <input type="submit" name="filter" id="filter" value="Search">
                    </div>
                    <form method="POST" action="staffpdf.php">
                    <div class="save-buttons">
                    <button type="submit" name="staffpdf" value="PDF" class="adobe"><img src="../giwcpage/pngicons/adobe.png" class="png">PDF</button>
                    </div>
                    </form>
                            
                    <form method="POST" action="staffxls.php">
                    <div class="save-buttons">
                    <button type="submit" name="staffxls" value="Excel"><img src="../giwcpage/pngicons/excel.png" class="png">Excel</button>
                    </div>
                     </form> 
                     <div id="filters">
                                <select name="fetchval" id="fetchval">
                                <option value="" disabled="" selected=""> Gender</option>
                                <option value="Male" name="male" class="male">Male</option>
                                <option label="Female" value="Female" name="female" class="female"></option>
                                </select>
                            </div>            
                    <thead>
                        <tr>
                            <th>Staff No.</th>
                            <th>First Name</th>
                            <th>Surname</th>
                            <th>Contact No.</th>
                            <th>Actions</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">
                                             
                    </tbody>
                    <?php require 'staffdisplay.php' ?>
                </table>
                <br>
                 
            </td>
        </table>
        <script src="../jquery-3.6.0.min.js"></script>
        <script type="text/javascript">

/*function up()
{
    xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","staffetch.php?stfname="+document.getElementById("search").value,false);
    xmlhttp.send(null);
    document.getElementById("show").innerHTML=xmlhttp.responseText;
    
}*/

$(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#stafflist tr').each(function(){
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
                    url:"genderstaff.php",
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