<?php 
$revmonth = $_GET['revmonth'];
//if ($revmonth=="")
//{

//}else
//{
    $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");
    $query = "SELECT * FROM revenue WHERE revmonth LIKE '$revmonth%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['revweek'];?></td>
            <td><?php echo $row['revdate'];?></td>
            <td><?php echo $row['revmonth'];?></td>
            <td><?php echo $row['revtype'];?></td>
            <td><?php echo $row['revamount'];?></td>
            <td><a href="revedit.php?revweek=<?php echo $row['revweek']; ?>">Edit</a></td>
            <td><a href="revdelete.php?revweek=<?php echo $row['revweek']; ?>">Delete</a></td>
            <td><a href="view.php?id=<?php echo $row['revweek']; ?>">View</a></td>
        </tr>
        <?php
         }
         echo "</tbody>";
     
//}

?>