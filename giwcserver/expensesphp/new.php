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
        
    <?php if(isset($_POST['expsubmit'])){ print_r($_POST['expname']); } ?>

    <form method="POST"> 
        <div>
            <label>Expense Name</label><label class="validation-error hide" id="expnameValidationError" >This field is required.</label>
            <input type="text" name="expname[]" />
        </div>
        
        <div class="paste-new-forms"></div>
        <div class="form-action-buttons">
            <input name="expsubmit" type="submit" value="Submit">
        </div>
        <div class="form-action-buttons">
            <a href="javascript:void(0)" class="add-more-forms">Add More</a>
        </div>
    
    </form> 
</body>
<script type="text/javascript">

$(document).ready(function () {
    $(document).on('click','.add-more-forms', function () {
        $('<p><input type="text" name="expname[]"  value="" /></p>').appendTo($('.paste-new-forms'));
    });
});
</script>
</html>


    