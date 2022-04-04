<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
$output = '';

if(isset($_POST["excelist"]))
{
    $sql = "SELECT * FROM membership";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .='
          <table>
          <tr>
            <th>Member No.</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>D.O.B</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Email</th>
            <th>Contact No.</th>
            <th>Address</th>
            <th>City/Town</th>
            <th>Church Group One</th>
            <th>Church Group Two</th>
            <th>Chapel Group</th>
            <th>Member Since</th>
          </tr> 
        ';
        while ($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr>
                <td>'.$row["memberno"].'</td>
                <td>'.$row["firstName"].'</td>
                <td>'.$row["surname"].'</td>
                <td>'.$row["date"].'</td>
                <td>'.$row["gender"].'</td>
                <td>'.$row["status"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["mobile"].'</td>
                <td>'.$row["maddress"].'</td>
                <td>'.$row["city"].'</td>
                <td>'.$row["group1"].'</td>
                <td>'.$row["group2"].'</td>
                <td>'.$row["chapel"].'</td>
                <td>'.$row["since"].'</td>
            </tr> 
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=memberlist.xls");
        echo $output;
    }
}



?>