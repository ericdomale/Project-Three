<?php
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
} 
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT jid, (SELECT firstName FROM membership WHERE mid=tmid1) AS tmid1, (SELECT firstName FROM membership WHERE mid=tmid2) AS tmid2, jdate, titype FROM joint AS j INNER JOIN membership AS m ON j.tmid1 = m.mid ORDER BY jid DESC";
        $result = $conn-> query($sql);
                            
        if ($result->num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['jid'];?></td>
        <td><?php echo $row['tmid1'];?></td>
        <td><?php echo $row['tmid2'];?></td>
        <td><?php echo $row['jdate'];?></td>
        <td><?php echo $row['titype'];?></td>
        <td><a href="jointedit.php?jid=<?php echo $row['jid']; ?>" class="edit">Edit</a></td>
        <td><a href="jointdelete.php?jid=<?php echo $row['jid']; ?>" onClick="onDelete(this)" class="delete">Delete</a></td>
        <td><a href="jointview.php?jid=<?php echo $row['jid']; ?>" class="view">View</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      