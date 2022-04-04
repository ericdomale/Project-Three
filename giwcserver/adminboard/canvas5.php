<?php 

$conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

$query = "SELECT ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'January' ) AS january1,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'February' ) AS february2,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'March' ) AS march3,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'April' ) AS april4,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'May' ) AS may5,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'June' ) AS june6,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'July' ) AS july7,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'August' ) AS august8,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'September' ) AS september9,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'October' ) AS october10,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'November' ) AS november11,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'December' ) AS december12";
          $query_run = mysqli_query($conn,$query);
          while($row = mysqli_fetch_array($query_run)){
         
            ?>
         <input type='hidden' id='january1' value ="<?php echo $row['january1'];?>">
         <input type='hidden' id='february2' value ="<?php echo $row['february2'];?>">
         <input type='hidden' id='march3' value ="<?php echo $row['march3'];?>">
         <input type='hidden' id='april4' value ="<?php echo $row['april4'];?>">
         <input type='hidden' id='may5' value ="<?php echo $row['may5'];?>">
         <input type='hidden' id='june6' value ="<?php echo $row['june6'];?>">
         <input type='hidden' id='july7' value ="<?php echo $row['july7'];?>">
         <input type='hidden' id='august8' value ="<?php echo $row['august8'];?>">
         <input type='hidden' id='september9' value ="<?php echo $row['september9'];?>">
         <input type='hidden' id='october10' value ="<?php echo $row['october10'];?>">
         <input type='hidden' id='november11' value ="<?php echo $row['november11'];?>">
         <input type='hidden' id='december12' value ="<?php echo $row['december12'];?>">
         <?php
          
         }; 

?>