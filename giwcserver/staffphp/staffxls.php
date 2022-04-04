<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
$output = '';

if(isset($_POST["staffxls"]))
{
    $sql = "SELECT * FROM staff";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .='
          <table>
          <tr>
            <th>Staff No.</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>D.O.B</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Email</th>
            <th>Contact No.</th>
            <th>City</th>
            <th>Address</th>
            <th>Job Description</th>
            <th>Chapel Group</th>
            <th>Employed Since</th>
          </tr> 
        ';
        while ($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr>
                <td>'.$row["staffno"].'</td>
                <td>'.$row["stfname"].'</td>
                <td>'.$row["surname"].'</td>
                <td>'.$row["stfdate"].'</td>
                <td>'.$row["gender"].'</td>
                <td>'.$row["status"].'</td>
                <td>'.$row["stfemail"].'</td>
                <td>'.$row["stfmobile"].'</td>
                <td>'.$row["stfaddress"].'</td>
                <td>'.$row["stfcity"].'</td>
                <td>'.$row["jobdesc"].'</td>
                <td>'.$row["chapel"].'</td>
                <td>'.$row["empsince"].'</td>
            </tr> 
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=staff.xls");
        echo $output;
    }
}



?>