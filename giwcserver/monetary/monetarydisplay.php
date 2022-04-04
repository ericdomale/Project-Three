<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT monid, monweek, mondate, monetmonth, montype, monprogram, monamount FROM monetary ORDER BY monid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
            <td><?php echo $row['monid'];?></td>
            <td><?php echo $row['monweek'];?></td>
            <td><?php echo $row['mondate'];?></td>
            <td><?php echo $row['monetmonth'];?></td>
            <td><?php echo $row['montype'];?></td>
            <td><?php echo $row['monprogram'];?></td>
            <td><?php echo $row['monamount'];?></td>
            <td><a href="revedit.php?monid=<?php echo $row['monid']; ?>" class="edit">Edit</a></td>
            <td><a href="revdelete.php?monweek=<?php echo $row['monweek']; ?>" class="delete">Delete</a></td>
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