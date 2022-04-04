<?php 
$stfname = $_GET['stfname'];
//if ($stfname=="")
//{

//}else
//{
    $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");
    $query = "SELECT * FROM staff WHERE stfname LIKE '$stfname%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['staffno'];?></td>
            <td><?php echo $row['stfname'];?></td>
            <td><?php echo $row['surname'];?></td>
            <td><?php echo $row['stfdate'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['stfemail'];?></td>
            <td><?php echo $row['stfmobile'];?></td>
            <td><?php echo $row['stfaddress'];?></td>
            <td><?php echo $row['stfcity'];?></td>
            <td><?php echo $row['jobdesc'];?></td>
            <td><?php echo $row['chapel'];?></td>
            <td><?php echo $row['empsince'];?></td>
            <td><a href="staffedit.php?staffno=<?php echo $row['staffno']; ?>">Edit</a></td>
            <td><a href="staffdelete.php?staffno=<?php echo $row['staffno']; ?>">Delete</a></td>
            <td><a href="view.php?offweek=<?php echo $row['staffno']; ?>">View</a></td>
        </tr>
        <?php
         }
         echo "</tbody>";
     
//}

?>