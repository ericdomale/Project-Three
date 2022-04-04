<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Expenses
    </title>
    <link rel="stylesheet" href="expenses.css">
    <script src="../jquery-3.6.0.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
</head>

<body>
<header>
        <div class="left_area">
            <h3><img class="prev"   onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../revenuephp/revenue.php"><img class="next" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/coins-fill.svg"><span>Expenses.</span></h3>
          </div>
          <div class="right_area">
            <a  href="../maindashphp/maindash.php" class="home_btn"><?php echo $_SESSION['username'];?></a>
          </div>
          <div class="right_area">
            <a  href="../loginphp/login.php" class="logout_btn">Logout</a>
          </div>
        </header>
        <form method="POST"  action="expconnect.php" autocomplete="off">
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
                    <div>
                        <label hidden>Expense ID</label><label  class="validation-error hide" required> required </label>
                         <input type="hidden" name="expid" id="expid">
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="date" name="expdate" id="expdate">
                    </div>
                    <div>
                        <label>Month</label>
                       <select name="expmonth" id="expmonth" required>
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
                    <div class="mainform">
                    <div>
                        <label>Expense Name</label><label class="validation-error hide" id="expnameValidationError" >This field is required.</label>
                        <input type="text" name="expname[]" required />
                    </div>
                   <div>
                        <label>Expense Category</label>
                       <select name="expgory[]" id="expgory" required>
                           <option>--Select One--</option>
                           <option label="Fuel" value="Fuel"></option>
                           <option label="Sundry" value="Sundry"></option>
                           <option label="Salaries" value="Salaries"></option>
                           <option label="Internet" value="Internet"></option>
                           <option label="Air Condition" value="Air Condition"></option>
                           <option label="Office Stationery" value="Office Stationery"></option>
                           <option label="General Maintenance" value="General Maintenance"></option>
                           <option label="Communion" value="Communion"></option>
                           <option label="Phone Bills" value="Phone Bills"></option>
                           <option label="Water" value="Water"></option>
                           <option label="Others" value="Others"></option>
                       </select>
                    </div>
                    <div>
                        <label>Payment Method</label>
                       <select name="paytm[]" id="paytm" required>
                           <option>--Select One--</option>
                           <option label="Cash" value="Cash"></option>
                           <option label="Mobile Money" value="Mobile Money"></option>
                           <option label="Bank Transfer" value="Bank Transfer"></option>
                           <option label="Debit Card" value="Debit Card"></option>
                           <option label="Bank Deposit" value="Bank Deposit"></option>
                       </select>
                    </div>
                    <div>
                        <label>Expense Amount</label>
                        <input type="text" name="expamount[]" id="expamount" required>
                    </div>
                    </div>
                    <div class="paste-new-forms"></div>
                    <div class="form-action-buttons">
                        <input name="expsubmit" type="submit" value="Submit">
                    </div>
                    <div class="form-action-buttons">
                        <a href="javascript:void(0)" class="add-more-forms">Add More</a>
                    </div>
                </form> 
  

                <table class="list" id="expenselist">
                <form method="POST" action="expenses.php">
                        <label>Search</label>
                     <input type="search" name="searchbar" id="search" placeholder="Search Expenses..." />
                     <input type="submit" name="filter" id="filter" value="Search">
                </form>
                    <br>
                    <form method="POST" action="pdfexpenses.php">
                        <div class="save-buttons">
                        <button type="submit" name="expensespdf" value="PDF" class="adobe"><img src="../giwcpage/pngicons/adobe.png" class="png">PDF</button>
                        </div>
                        </form>
                                
                        <form method="POST" action="expensesxls.php">
                        <div class="save-buttons">
                        <button type="submit" name="xlsexpenses" value="Excel"><img src="../giwcpage/pngicons/excel.png" class="png">Excel</button>
                        </div>
                   </form>     
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Month</th>
                            <th>Expense Name</th>
                            <th>Expense Category</th>
                            <th>Payment Method</th>
                            <th>Expense Amount</th>
                            <th>Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="show">
                    <?php require 'expdisplay.php' ?>
                    </tbody>
                    
                </table>
        


</body>
<script type="text/javascript">

$(document).ready(function () {


    $(document).on('click','.remove-btn', function() {

        $(this).closest('.mainform').remove();

    });


    $(document).on('click','.add-more-forms', function () {
          $('.paste-new-forms').append('<div class="mainform"><hr><br><div>\
                        <label>Expense Name</label><label class="validation-error hide" id="expnameValidationError" >This field is required.</label>\
                        <input type="text" name="expname[]" required />\
                    </div>\
                    <div>\
                        <label>Expense Category</label>\
                       <select name="expgory[]" id="expgory" required>\
                           <option>--Select One--</option>\
                           <option label="Fuel" value="Fuel"></option>\
                           <option label="Sundry" value="Sundry"></option>\
                           <option label="Salaries" value="Salaries"></option>\
                           <option label="Internet" value="Internet"></option>\
                           <option label="Air Condition" value="Air Condition"></option>\
                           <option label="Office Stationery" value="Office Stationery"></option>\
                           <option label="General Maintenance" value="General Maintenance"></option>\
                           <option label="Communion" value="Communion"></option>\
                           <option label="Phone Bills" value="Phone Bills"></option>\
                           <option label="Water" value="Water"></option>\
                           <option label="Others" value="Others"></option>\
                       </select>\
                    </div>\
                    <div>\
                        <label>Payment Method</label>\
                       <select name="paytm[]" id="paytm" required>\
                           <option>--Select One--</option>\
                           <option label="Cash" value="Cash"></option>\
                           <option label="Mobile Money" value="Mobile Money"></option>\
                           <option label="Bank Transfer" value="Bank Transfer"></option>\
                           <option label="Debit Card" value="Debit Card"></option>\
                           <option label="Bank Deposit" value="Bank Deposit"></option>\
                       </select>\
                    </div>\
                    <div>\
                        <label>Expense Amount</label>\
                        <input type="text" name="expamount[]" id="expamount" required>\
                    </div><div>\
                        <input type="button" class="remove-btn" value="Remove">\
                        <br></div></div>');
    
    });
    

   
});





/*
$(document).ready(function(){
            $('#search').keyup(function(){
                search_table($(this).val());
           });

           function search_table(value){
            $('#expenselist tr').each(function(){
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
        */
        

</script>

</html>


    