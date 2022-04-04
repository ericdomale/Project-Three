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

    $query = "SELECT memberno, firstName, surname, gender, mobile FROM membership WHERE gender = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
?>
<?php
if ($count){
?>

    <thead  id="show">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Gender</th>
            <th>Contact No.</th>
            <th>Actions</th>
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
        <td><?php echo $row['memberno'];?></td>
        <td><?php echo $row['firstName'];?></td>
        <td><?php echo $row['surname'];?></td>
        <td><p class="gender"><?php echo $row['gender'];?></p></td>
        <td><?php echo $row['mobile'];?></td>
        <td><a href="edit.php?memberno=<?php echo $row['memberno']; ?>" class="edit">Edit</a></td>
        <td><a href="delete.php?memberno=<?php echo $row['memberno']; ?>" onClick="onDelete(this)" class="delete">Delete</a></td>
        <td><a href="../profilesphp/profile.php?memberno=<?php echo $row['memberno']; ?>" class="view">View</a></td>
    </tr>
    <?php
}
?>

</tbody>
<?php 
?>
