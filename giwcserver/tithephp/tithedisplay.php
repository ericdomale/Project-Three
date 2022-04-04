<?php
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
} 
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT tid, tmid, firstName, surname, pdate, titype, pmonth, pamount, others, otmonth, otamount FROM tithes AS t INNER JOIN membership AS m ON t.tmid = m.mid ORDER BY tid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['tmid'];?></td>
        <td><?php echo $row['firstName'];?></td>
        <td><?php echo $row['surname'];?></td>
        <td><?php echo $row['pdate'];?></td>
        <td><?php echo $row['titype'];?></td>
        <td><a href="tithedit.php?tid=<?php echo $row['tid']; ?>" class="edit">Edit</a></td>
        <td><a href="tithedelete.php?tid=<?php echo $row['tid']; ?>" class="delete">Delete</a></td>
        <td><a href="titherecord.php?tid=<?php echo $row['tid']; ?>" class="view">View</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      


