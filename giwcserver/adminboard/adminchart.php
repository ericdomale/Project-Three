<?php 
    /* header("Content-Type: application/json");
     $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

     $query = "SELECT ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Joy Chapel' ) AS Joy, ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Faith Chapel' ) AS Faith, ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Love Chapel' ) AS Love, ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Grace Chapel' ) AS Grace";
     $query_run = mysqli_query($conn,$query);
     
     $data = array();
     foreach ($query_run as $row){
        $data[] = $row;
    }
       $query_run->close();
        $conn->close();

        print json_encode($data); 
 ?>
              
              

<?php 
     header("Content-Type: application/json");
     $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

     $query = "SELECT ( SELECT COUNT(memberno) FROM membership WHERE gender = 'male' ) AS Male, ( SELECT COUNT(memberno) FROM membership WHERE gender = 'female' ) AS Female";
     $query_run = mysqli_query($conn,$query);
     $row = mysqli_num_rows($query_run);
     
     $data = array();
     foreach ($query_run as $row){
        $data[] = $row;
    }
       $query_run->close();
        $conn->close();

        print json_encode($data); 
 */?>
 
 <?php
  $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

  $query = "SELECT ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Joy Chapel' ) AS Joy, ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Faith Chapel' ) AS Faith, ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Love Chapel' ) AS Love, ( SELECT COUNT(memberno) FROM membership WHERE chapel = 'Grace Chapel' ) AS Grace";
  $query_run = mysqli_query($conn,$query);

  if (mysqli_num_rows($query_run) >= 1)
  {
     while ($row = mysqli_fetch_assoc($query_run))
      { ?>
         <tr>
         <input type='hidden' id='Joy' value ="<?php echo $row['Joy'];?>">
         <input type='hidden' id='Faith' value ="<?php echo $row['Faith'];?>">
         <input type='hidden' id='Love' value ="<?php echo $row['Love'];?>">
         <input type='hidden' id='Grace' value ="<?php echo $row['Grace'];?>">  
         </tr>
         <?php 
         
     }
  }
  else{
     echo "Something wrong";
  }
 
 ?>



<?php 
 $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

 $query = "SELECT ( SELECT COUNT(memberno) FROM membership WHERE gender = 'male' ) AS Male, ( SELECT COUNT(memberno) FROM membership WHERE gender = 'female' ) AS Female";
 $query_run = mysqli_query($conn,$query);

  if (mysqli_num_rows($query_run) >= 1)
  {
     while ($row = mysqli_fetch_assoc($query_run))
      { ?>
         <tr>
         <input type='hidden' id='Male' value ="<?php echo $row['Male'];?>">
         <input type='hidden' id='Female' value ="<?php echo $row['Female'];?>">
         </tr>
         <?php 
         
     }
  }
  else{
     echo "Something wrong";
  }

?>



<?php 
$conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

$query = "SELECT ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'January' ) AS January,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'February' ) AS February,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'March' ) AS March,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'April' ) AS April,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'May' ) AS May,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'June' ) AS June,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'July' ) AS July,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'August' ) AS August,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'September' ) AS September,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'October' ) AS October,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'November' ) AS November,
          ( SELECT SUM(revamount) FROM revenue WHERE revmonth = 'December' ) AS December";
 $query_run = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($query_run)){

   ?>
<input type='hidden' id='January' value ="<?php echo $row['January'];?>">
<input type='hidden' id='February' value ="<?php echo $row['February'];?>">
<input type='hidden' id='March' value ="<?php echo $row['March'];?>">
<input type='hidden' id='April' value ="<?php echo $row['April'];?>">
<input type='hidden' id='May' value ="<?php echo $row['May'];?>">
<input type='hidden' id='June' value ="<?php echo $row['June'];?>">
<input type='hidden' id='July' value ="<?php echo $row['July'];?>">
<input type='hidden' id='August' value ="<?php echo $row['August'];?>">
<input type='hidden' id='September' value ="<?php echo $row['September'];?>">
<input type='hidden' id='October' value ="<?php echo $row['October'];?>">
<input type='hidden' id='November' value ="<?php echo $row['November'];?>">
<input type='hidden' id='December' value ="<?php echo $row['December'];?>">
<?php
 
}; 
?>


<?php 
$conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

$query = "SELECT ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Sunday Service' ) AS Sunday,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Thanksgiving Service' ) AS Thanksgiving,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Anointing Service' ) AS Anointing,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Special Service' ) AS Special,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Tuesday Service' ) AS Tuesday,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Friday Night Service' ) AS Friday";
 $query_run = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($query_run)){

   ?>
<input type='hidden' id='Sunday' value ="<?php echo $row['Sunday'];?>">
<input type='hidden' id='Thanksgiving' value ="<?php echo $row['Thanksgiving'];?>">
<input type='hidden' id='Anointing' value ="<?php echo $row['Anointing'];?>">
<input type='hidden' id='Special' value ="<?php echo $row['Special'];?>">
<input type='hidden' id='Tuesday' value ="<?php echo $row['Tuesday'];?>">
<input type='hidden' id='Friday' value ="<?php echo $row['Friday'];?>">
<?php
 
}; 
?>


