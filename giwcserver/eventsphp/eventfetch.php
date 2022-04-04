<?php 
$eventname = $_GET['eventname'];
//if ($eventname=="")
//{

//}else
//{
    $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");
    $query = "SELECT * FROM events WHERE eventname LIKE '$eventname%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['eventname'];?></td>
            <td><?php echo $row['fdate'];?></td>
            <td><?php echo $row['todate'];?></td>
            <td><?php echo $row['eventtime'];?></td>
            <td><?php echo $row['speakers'];?></td>
            <td><?php echo $row['eincome'];?></td>
            <td><a href="eventedit.php?eventname=<?php echo $row['eventname']; ?>">Edit</a></td>
            <td><a href="eventdelete.php?eventname=<?php echo $row['eventname']; ?>">Delete</a></td>
            <td><a href="view.php?eventname=<?php echo $row['eventname']; ?>">View</a></td>
        </tr>
        <?php
         }
         echo "</tbody>";
     
//}

?>