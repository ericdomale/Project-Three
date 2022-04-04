<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT memberno, mid, firstName, surname, gender, mobile FROM membership ORDER BY memberno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
    <td><p><?php echo $row['memberno'];?></p></td>
        <td><p><?php echo $row['mid'];?></p></td>
        <td><?php echo $row['firstName'];?></td>
        <td><?php echo $row['surname'];?></td>
        <td><p class="female"><?php echo $row['gender'];?></p></td>
        <td><?php echo $row['mobile'];?></td>
        <td><a href="edit.php?memberno=<?php echo $row['memberno']; ?>" class="edit">Edit</a></td>
        <td><a href="delete.php?memberno=<?php echo $row['memberno']; ?>" class="delete">Delete</a></td>
        <td><a href="../profilesphp/profile.php?memberno=<?php echo $row['memberno']; ?>" class="view">View</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="membership.css">
</head>
<body>
    
</body>
</html>