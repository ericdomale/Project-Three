<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT adid, username, passkey FROM login ORDER BY adid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
            <td><?php echo $row['adid'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['passkey'];?></td>
            <td><a href="adminedit.php?adid=<?php echo $row['adid']; ?>" class="edit">Edit</a></td>
            <td><a href="admindelete.php?adid=<?php echo $row['adid']; ?>" class="delete">Delete</a></td>
        </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo " No Data Available";
        }
        $conn-> close();

      
?>                    