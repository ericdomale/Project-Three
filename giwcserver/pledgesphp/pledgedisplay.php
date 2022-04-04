<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT pdgid, pdgname, pdgory, pgdate, pdgstatus, pdgmonth, pdgamount FROM pledges ORDER BY pdgid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
     <tr> 
            <td><?php echo $row['pdgid'];?></td>
            <td><?php echo $row['pdgname'];?></td>
            <td><?php echo $row['pdgory'];?></td>
            <td><?php echo $row['pgdate'];?></td>
            <td><?php echo $row['pdgstatus'];?></td>
            <td><?php echo $row['pdgmonth'];?></td>
            <td><?php echo $row['pdgamount'];?></td>
            <td><a href="pledgedit.php?pdgid=<?php echo $row['pdgid']; ?>" class="edit">Edit</a></td>
            <td><a href="plegdelete.php?pdgname=<?php echo $row['pdgname']; ?>" class="delete">Delete</a></td>
            <!--<td><a href="view.php?expname=<?php echo $row['pdgname']; ?>" class="view">View</a></td>-->
        </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>                    