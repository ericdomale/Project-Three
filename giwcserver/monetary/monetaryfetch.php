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

    $query = "SELECT  monid, monweek, mondate, monetmonth, montype, monprogram, monamount FROM monetary WHERE montype = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
?>
<?php
if ($count){
?>

    <thead  id="show">
        <tr>
        <th>ID</th>
            <th>Week</th>
            <th>Date</th>
            <th>Month</th>
            <th>Revenue Type</th>
            <th>Program</th>
            <th>Amount</th>
            <th>Actions</th>
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
        <td><?php echo $row['monid'];?></td>
        <td><?php echo $row['monweek'];?></td>
        <td><?php echo $row['mondate'];?></td>
        <td><?php echo $row['monetmonth'];?></td>
        <td><?php echo $row['montype'];?></td>
        <td><?php echo $row['monprogram'];?></td>
        <td><?php echo $row['monamount'];?></td>
        <td><a href="edit.php?monid=<?php echo $row['monid']; ?>" class="edit">Edit</a></td>
        <td><a href="delete.php?monid=<?php echo $row['monid']; ?>" onClick="onDelete(this)" class="delete">Delete</a></td>
        <td><a href="../profilesphp/profile.php?monid=<?php echo $row['monid']; ?>" class="view">View</a></td>
    </tr>
    <?php
}
?>

</tbody>
<?php 
?>
