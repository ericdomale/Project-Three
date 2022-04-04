<?php
$pdgname = $_GET['pdgname'];
//if ($pdgname=="")
//{

//}else
//{
    $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");
    $query = "SELECT * FROM pledges WHERE pdgname LIKE '$pdgname%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['pdgname'];?></td>
            <td><?php echo $row['pdgory'];?></td>
            <td><?php echo $row['pgdate'];?></td>
            <td><?php echo $row['pdgstatus'];?></td>
            <td><?php echo $row['pdgmonth'];?></td>
            <td><?php echo $row['pdgamount'];?></td>
            <td><a href="pledgedit.php?pdgname=<?php echo $row['pdgname']; ?>">Edit</a></td>
            <td><a href="plegdelete.php?pdgname=<?php echo $row['pdgname']; ?>">Delete</a></td>
            <td><a href="view.php?expname=<?php echo $row['pdgname']; ?>">View</a></td>
        </tr>
        <?php
         }
         echo "</tbody>";
     
//}

?>