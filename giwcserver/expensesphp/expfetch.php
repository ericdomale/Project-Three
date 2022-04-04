<?php
$expname = $_GET['expname'];
if ($expname=="")
{

}else
{
    $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");
    $query = "SELECT * FROM expenses WHERE expname LIKE '$expname%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['expname'];?></td>
            <td><?php echo $row['expgory'];?></td>
            <td><?php echo $row['expdate'];?></td>
            <td><?php echo $row['paytm'];?></td>
            <td><?php echo $row['expmonth'];?></td>
            <td><?php echo $row['expamount'];?></td>
            <td><a href="expedit.php?expname=<?php echo $row['expname']; ?>">Edit</a></td>
            <td><a href="expdelete.php?expname=<?php echo $row['expname']; ?>">Delete</a></td>
            <td><a href="view.php?expname=<?php echo $row['expname']; ?>">View</a></td>
        </tr>
        <?php
         }
         echo "</tbody>";
     
}

?>

