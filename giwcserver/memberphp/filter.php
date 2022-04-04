<?php 


$firstName = $_GET['firstName'];
if ($firstName=="")
{

}else
{
    $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");
    $query = "SELECT * FROM membership WHERE firstName LIKE '$firstName%'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result))
    {?>
        <tr>
            <td><?php echo $row['memberno'];?></td>
            <td><?php echo $row['firstName'];?></td>
            <td><?php echo $row['surname'];?></td>
            <td><?php echo $row['date'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['maddress'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><?php echo $row['group1'];?></td>
            <td><?php echo $row['group2'];?></td>
            <td><?php echo $row['chapel'];?></td>
            <td><?php echo $row['since'];?></td>
            <td><a href="edit.php?memberno=<?php echo $row['memberno']; ?>">Edit</a></td>
            <td><a href="delete.php?memberno=<?php echo $row['memberno']; ?>">Delete</a></td>
            <td><a href="../tithephp/tithe.php?memberno=<?php echo $row['memberno']; ?>">View</a></td>
        </tr>
        <?php
         }
         //echo "</tbody>";
     
}
    







/*echo "<table>";
while ($row = mysqli_fetch_array($result))
{ 
     echo "<tr>";
        echo "<td>"; echo $row['memberno']; echo "</td>";
        echo "<td>"; echo $row['firstName']; echo "</td>";
        echo "<td>"; echo $row['surname']; echo "</td>";
        echo "<td>"; echo $row['date']; echo "</td>";
        echo "<td>"; echo $row['gender']; echo "</td>";
        echo "<td>"; echo $row['status']; echo "</td>";
        echo "<td>"; echo $row['email']; echo "</td>";
        echo "<td>"; echo $row['mobile']; echo "</td>";
        echo "<td>"; echo $row['maddress']; echo "</td>";
        echo "<td>"; echo $row['city']; echo "</td>";
        echo "<td>"; echo $row['group1']; echo "</td>";
        echo "<td>"; echo $row['group2']; echo "</td>";
        echo "<td>"; echo $row['chapel']; echo "</td>";
        echo "<td>"; echo $row['since']; echo "</td>";
         echo "<td>";"<a href="view.php?memberno=<?php echo $row['memberno']; ?>">"View"</a>""</td>";
      
     echo "</tr>";
}
echo "</table>";*/


?>









