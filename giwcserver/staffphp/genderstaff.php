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

    $query = "SELECT * FROM staff WHERE gender = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
?>
<?php
if ($count){
?>

    <thead  id="show">
    <tr>
         <th>Staff No.</th>
         <th>First Name</th>
         <th>Surname</th>
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
            <td><?php echo $row['staffno'];?></td>
            <td><?php echo $row['stfname'];?></td>
            <td><?php echo $row['surname'];?></td>
            <td><?php echo $row['stfmobile'];?></td>
            <td><a href="staffedit.php?staffno=<?php echo $row['staffno']; ?>" class="edit">Edit</a></td>
            <td><a href="staffdelete.php?staffno=<?php echo $row['staffno']; ?>" class="delete">Delete</a></td>
            <td><a href="../profilesphp/profile.php?staffno=<?php echo $row['staffno']; ?>" class="view">View</a></td>
    </tr>
    <?php
}
?>

</tbody>
<?php 
?>
