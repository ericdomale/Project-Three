<?php 
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT affno, firstname, surname, gender, affmobile FROM affilate ORDER BY affno DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
    <tr>
        <td><p><?php echo $row['affno'];?></p></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['surname'];?></td>
        <td><p class="female"><?php echo $row['gender'];?></p></td>
        <td><?php echo $row['affmobile'];?></td>
        <td><a href="affedit.php?affno=<?php echo $row['affno']; ?>" class="edit">Edit</a></td>
        <td><a href="affdelete.php?affno=<?php echo $row['affno']; ?>" class="delete">Delete</a></td>
        <td><a href="affprofile.php?affno=<?php echo $row['affno']; ?>" class="view">View</a></td>
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
    <link rel="stylesheet" href="affilate.css">
</head>
<body>
    
</body>
</html>