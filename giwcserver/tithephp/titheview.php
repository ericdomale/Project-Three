<?php
/*$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");

if (isset($_GET['tiitheno']))
{
    $titheno = $_GET['titheno'];
    $sql = "SELECT * FROM tithes WHERE titheno='$row[titheno]' AND firstName LIKE 'la%'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        
        if($row = $result->fetch_array()) {
            echo '<h1>'.$row["firstName"]."'s Tithe Record</h1>";
            echo '<table>';
            echo '<tr><td>Member Number</td><td>'.$row["titheno"].'</td></tr>';
            echo '<tr><td>PAYMENT DATE</td><td>'.$row["pdate"].'</td></tr>';
            echo '<tr><td>MONTH</td><td>'.$row["pmonth"].'</td></tr>';
            echo '<tr><td>AMOUNT PAID</td><td>'.$row["pamount"].'</td></tr>';
            echo '<tr><td>OTHERS</td><td>'.$row["others"].'</td></tr>';
            echo '<tr><td>AMOUNT PAID</td><td>'.$row["otamount"].'</td></tr>';
        }
        echo '</table>';
    }
   else {
       echo "0 results";
    }
}
/*else {*/

    //echo '<h2>Tithe Records:</h2>';

   // $titheno = $_GET['titheno'];
    //$sql = "SELECT * FROM tithes WHERE titheno='$titheno'";
    
    //$result = $conn->query($sql);
    
    /*if ($result->num_rows > 0) {


        while($row = $result->fetch_array()) {
            
            echo '<h1>'.$row["firstName"]."'s Tithe Record</h1>";
            echo '<hr />';
            echo '<table>';
            echo '<tr><td></td><td>'.$row["titheno"].'</td></tr>';
            echo '<tr><td>PAYMENT DATE:</td><td>'.$row["pdate"].'</td></tr>';
            echo '<tr><td>MONTH:</td><td>'.$row["pmonth"].'</td></tr>';
            echo '<tr><td>AMOUNT PAID:</td><td>'.$row["pamount"].'</td></tr>';
            echo '<tr><td>OTHERS:</td><td>'.$row["others"].'</td></tr>';
            echo '<tr><td>AMOUNT PAID:</td><td>'.$row["otamount"].'</td></tr>';
            echo '</table>';
            
        }
    }
    else {
       echo "0 results";
    }
}*/

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>View Tithes</title>
     <link rel="stylesheet" href="titheview.css">
 </head>
 <body>
     <header>
     <div class="left_area">
            <h3><img class="prev"  onclick="history.back()" src="../svg/arrow-left-circle-line.svg"></h3>
            <h3><a href="../adminboard/adminboard.php"><img class="next" onclick="history.forward()" src="../svg/arrow-right-circle-line.svg"></a></h3>
            <h3><img class="image" src="../svg/account-pin-circle-line.svg"><span>Member Tithes.</span></h3>
          </div>
     </header>
        


 <div class="accordion">
               <div class="contentBx">
                   <div class="label">Tithe Info</div>
                   <div class="content">
                       <?php
                      $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");

                       $titheno = $_GET['titheno'];
                       $sql = "SELECT * FROM tithes WHERE titheno='$titheno' ORDER BY titheno ASC";
    
                       $result = $conn->query($sql);
                       if ($result->num_rows > 0) {


                        while($row = $result->fetch_array()) {
                            echo '<table>';
                            ?>
                            <tr>
                                <tr>
                                 <td><?php echo $row['titheno'];?></td>
                                 <td><?php echo $row['firstName'];?></td>
                                 <td><?php echo $row['surname'];?></td>
                                </tr>
                                <br> 
                                 <tr><td>PAYMENT DATE:</td><td><?php echo $row['pdate'];?></td></tr>
                                 <tr><td>TITHE TYPE:</td><td><?php echo $row['titype'];?></td></tr>
                                 <tr><td>MONTH:</td><td><?php echo $row['pmonth'];?></td></tr>
                                 <br>
                                 <tr><td>AMOUNT:</td><td><?php echo $row['pamount'];?></td></tr>
                                 <tr><td>OTHERS:</td><td><?php echo $row['others'];?></td></tr>
                                 <tr><td>MONTH:</td><td><?php echo $row['otmonth'];?></td></tr>
                                 <tr><td>AMOUNT:</td><td><?php echo $row['otamount'];?></td></tr>
                            </tr>
                            <hr />
                            <?php 
                            
                        }  echo '</table>';
                    }
                    else {
                       echo "0 results";
                    }
                       
                       
                       ?>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quibusdam natus asperna</p>
                   </div>
               </div>
           </div>
           <div >
           <div >
                  
           <script>
               const accordion = document.getElementsByClassName('contentBx');

for (i = 0; i<accordion.length; i++ ){
    accordion[i].addEventListener('click', function(){
        this.classList.toggle('active')
    })
}
           </script>
 </body>
 </html>