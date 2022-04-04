<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}


$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

if (isset($_POST['request'])){

    $request =$_POST['request'];

    $query = "SELECT * FROM tithes WHERE titype = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
?>
<?php
if ($count){
?>

    <thead  id="show">
    <tr><th>ID</th>
        <th>FIRST NAME</th>
        <th>SURNAME</th>                        
        <th>PAYMENT DATE</th>
        <th>TITHE TYPE</th>
        <th>ACTIONS</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <?php
    }else{
        echo "Sorry! no records";
    }

}        
?>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
    ?>
   <tr>
        <td><?php echo $row['tid'];?></td>
        <td><?php echo $row['firstName'];?></td>
        <td><?php echo $row['surname'];?></td>
        <td><?php echo $row['pdate'];?></td>
        <td><?php echo $row['titype'];?></td>
        <td><a href="tithedit.php?tid=<?php echo $row['tid']; ?>" class="edit">Edit</a></td>
        <td><a href="tithedelete.php?tid=<?php echo $row['tid']; ?>" onClick="onDelete(this)" class="delete">Delete</a></td>
        <td><a href="titheview.php?tid=<?php echo $row['tid']; ?>" class="view">View</a></td>
    </tr>
    <?php
}
?>

</tbody>
<?php 
?>
