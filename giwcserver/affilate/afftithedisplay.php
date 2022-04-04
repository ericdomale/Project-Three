<?php
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
} 
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM afftithes ORDER BY tid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['titheno'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['surname'];?></td>
        <td><?php echo $row['pdate'];?></td>
        <td><?php echo $row['titype'];?></td>
        <td><a href="afftithedit.php?tid=<?php echo $row['tid']; ?>" class="edit">Edit</a></td>
        <td><a href="afftithedelete.php?tid=<?php echo $row['tid']; ?>" onClick="onDelete(this)" class="delete">Delete</a></td>
        <td><a href="afftitherecord.php?titheno=<?php echo $row['titheno']; ?>" class="view">View</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      