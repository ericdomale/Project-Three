<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT offid, offweek, offdate, offprogram, offertype, ofamount, thamount FROM offerings ORDER BY offid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><?php echo $row['offid'];?></td>
        <td><?php echo $row['offweek'];?></td>
        <td><?php echo $row['offdate'];?></td>
        <td><?php echo $row['offprogram'];?></td>
        <td><?php echo $row['offertype'];?></td>
        <td><?php echo $row['ofamount'];?></td>
        <td><?php echo $row['thamount'];?></td>
        <td><a href="offedit.php?offid=<?php echo $row['offid']; ?>" class="edit">Edit</a></td>
        <td><a href="offdelete.php?offid=<?php echo $row['offid']; ?>" onClick="onDelete(this)" class="delete">Delete</td>
        <!--<td><a href="../profilesphp/profile.php?o_id=<?php echo $row['offweek']; ?>" class="view">View</a></td>-->
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>                    