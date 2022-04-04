<?php
//session_start();
//if(!$_SESSION['username'])
{
    //header('location:../loginphp/login.php');
}


$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

if (isset($_POST['request'])){

    $request =$_POST['request'];

    $query = "SELECT affno, firstname, surname, gender, affmobile FROM affilate WHERE gender = '$request'";
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
        <td><?php echo $row['affno'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['surname'];?></td>
        <td><p class="gender"><?php echo $row['gender'];?></p></td>
        <td><?php echo $row['affmobile'];?></td>
        <td><a href="affedit.php?affno=<?php echo $row['affno']; ?>" class="edit">Edit</a></td>
        <td><a href="affdelete.php?affno=<?php echo $row['affno']; ?>" onClick="onDelete(this)" class="delete">Delete</a></td>
        <td><a href="affprofile.php?affno=<?php echo $row['affno']; ?>" class="view">View</a></td>
    </tr>
    <?php
}
?>

</tbody>
<?php 
?>
