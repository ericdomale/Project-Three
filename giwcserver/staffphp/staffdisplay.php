<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT staffno, stfname, surname, stfdate, gender, status, stfemail, stfmobile, stfaddress, stfcity, jobdesc, chapel, empsince FROM staff ORDER BY staffno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
            <td><?php echo $row['staffno'];?></td>
            <td><?php echo $row['stfname'];?></td>
            <td><?php echo $row['surname'];?></td>
            <td><?php echo $row['stfmobile'];?></td>
            <td><a href="staffedit.php?staffno=<?php echo $row['staffno']; ?>" class="edit">Edit</a></td>
            <td><a href="staffdelete.php?staffno=<?php echo $row['staffno']; ?>" class="delete">Delete</a></td>
            <td><a href="staffprofile.php?staffno=<?php echo $row['staffno']; ?>" class="view">View</a></td>
        </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>                    