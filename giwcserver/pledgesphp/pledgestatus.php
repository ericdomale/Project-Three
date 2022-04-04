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

    $query = "SELECT * FROM pledges WHERE pdgstatus = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
?>
<?php
if ($count){
?>

    <thead  id="show">
    <tr>
        <th>ID</th>
        <th>Pledger Name</th>
        <th>Pledge Category</th>
        <th>Date</th>
        <th>Current Status</th>
        <th>Month</th>
        <th>Amount Pledged</th>
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
            <td><?php echo $row['pdgid'];?></td>
            <td><?php echo $row['pdgname'];?></td>
            <td><?php echo $row['pdgory'];?></td>
            <td><?php echo $row['pgdate'];?></td>
            <td><?php echo $row['pdgstatus'];?></td>
            <td><?php echo $row['pdgmonth'];?></td>
            <td><?php echo $row['pdgamount'];?></td>
            <td><a href="pledgedit.php?pdgid=<?php echo $row['pdgid']; ?>" class="edit">Edit</a></td>
            <td><a href="plegdelete.php?pdgname=<?php echo $row['pdgname']; ?>" class="delete">Delete</a></td>
            <td><a href="view.php?expname=<?php echo $row['pdgname']; ?>" class="view">View</a></td>
        </tr>
    <?php
}
?>

</tbody>
<?php 
?>
