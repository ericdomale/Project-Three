<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT revid, revweek, revdate, revmonth, revtype, revamount FROM revenue ORDER BY revid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
            <td><?php echo $row['revid'];?></td>
            <td><?php echo $row['revweek'];?></td>
            <td><?php echo $row['revdate'];?></td>
            <td><?php echo $row['revmonth'];?></td>
            <td><?php echo $row['revtype'];?></td>
            <td><?php echo $row['revamount'];?></td>
            <td><a href="revedit.php?revid=<?php echo $row['revid']; ?>" class="edit">Edit</a></td>
            <td><a href="revdelete.php?revweek=<?php echo $row['revweek']; ?>" class="delete">Delete</a></td>
            <!--<td><a href="view.php?id=<?php echo $row['revweek']; ?>"class="view">View</a></td>-->
        </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo " No Data Available";
        }
        $conn-> close();

      
?>                    