


<?php echo $row['firstName'];?>'s



<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");

if (isset($_GET['memberno']))
{
    $memberno = $_GET['memberno'];
    $sql = "SELECT * FROM membership WHERE memberno='$memberno'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        
        if($row = $result->fetch_assoc()) {
            echo '<h1>'.$row["firstName"]."'s Profile</h1>";
            echo '<table>';
            echo '<tr><td>Member Number</td><td>'.$row["memberno"].'</td></tr>';
            echo '<tr><td>Firstname</td><td>'.$row["firstName"].'</td></tr>';
            echo '<tr><td>Surname</td><td>'.$row["surname"].'</td></tr>';
            echo '<tr><td>Gender</td><td>'.$row["gender"].'</td></tr>';
            echo '<tr><td>Tithe Records</td><td><a href="../tithephp/tithe.php">'.$row["status"].'</a></td></tr>';
        }
        echo '</table>';
    }
   else {
       echo "0 results";
    }
}
else {

    echo '<h2>All our members:</h2>';

    $sql = "SELECT * FROM membership";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            
            echo '<hr />';
            echo '<table>';
            echo '<tr><td></td><td>'.$row["memberno"].'</td></tr>';
            echo '<tr><td>Firstname:</td><td>'.$row["firstName"].'</td></tr>';
            echo '<tr><td>Surname:</td><td>'.$row["surname"].'</td></tr>';
            echo '<tr><td>Gender:</td><td>'.$row["gender"].'</td></tr>';
            echo '<tr><td>Tithe Records:</td><td><a href="../tithephp/tithe.php?memberno=<?php echo '.$row["status"].'?>">'.$row["status"].'</a></td></tr>';
            echo '</table>';
            
        }
    }
    else {
       echo "0 results";
    }
}
