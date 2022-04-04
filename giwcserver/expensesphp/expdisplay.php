<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT expid, expdate, expmonth, expname, expgory, paytm, expamount FROM expenses ORDER BY expid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
   <tr>
            <td><?php echo $row['expid'];?></td>
            <td><?php echo $row['expdate'];?></td>
            <td><?php echo $row['expmonth'];?></td>
            <td><?php echo $row['expname'];?></td>
            <td><?php echo $row['expgory'];?></td>
            <td><?php echo $row['paytm'];?></td>
            <td><?php echo $row['expamount'];?></td>
            <td><a href="expedit.php?expid=<?php echo $row['expid']; ?>" class="edit">Edit</a></td>
            <td><a href="expdelete.php?expid=<?php echo $row['expid']; ?>" class="delete">Delete</a></td>
            <!--<td><a href="view.php?expname=<?php echo $row['expname']; ?>" class="view">View</a></td>-->
        </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>                    