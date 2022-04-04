<?php 
$offprogram = $_GET['offprogram'];
if ($offprogram=="")
{

}else
{
    $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");
    $query = "SELECT * FROM offerings WHERE offprogram LIKE '$offprogram%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['offweek'];?></td>
            <td><?php echo $row['offdate'];?></td>
            <td><?php echo $row['offprogram'];?></td>
            <td><?php echo $row['offertype'];?></td>
            <td><?php echo $row['ofamount'];?></td>
            <td><?php echo $row['thamount'];?></td>
            <td><a href="offedit.php?offweek=<?php echo $row['offweek']; ?>">Edit</a></td>
            <td><a href="offdelete.php?offweek=<?php echo $row['offweek']; ?>">Delete</a></td>
            <td><a href="view.php?offweek=<?php echo $row['offweek']; ?>">View</a></td>
        </tr>
        <?php
         }
         echo "</tbody>";
     
}

?>