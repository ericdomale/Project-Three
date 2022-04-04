<?php 

if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}

   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT eventid, eventname, fdate, todate, eventtime, speakers, eincome FROM events ORDER BY eventid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
            <td><?php echo $row['eventid'];?></td>
            <td><?php echo $row['eventname'];?></td>
            <td><?php echo $row['fdate'];?></td>
            <td><?php echo $row['todate'];?></td>
            <td><?php echo $row['eventtime'];?></td>
            <td><?php echo $row['speakers'];?></td>
            <td><?php echo $row['eincome'];?></td>
            <td><a href="eventedit.php?eventid=<?php echo $row['eventid']; ?>"class="edit">Edit</a></td>
            <td><a href="eventdelete.php?eventname=<?php echo $row['eventname']; ?>" class="delete">Delete</a></td>
            <!--<td><a href="view.php?eventname=<?php echo $row['eventname']; ?>" class="view">View</a></td>-->
        </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>                    