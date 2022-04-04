<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
$output = '';

if(isset($_POST["revenuexls"]))
{
    $sql = "SELECT * FROM revenue";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .='
          <table>
          <tr>
            <th>Week</th>
            <th>Date</th>
            <th>Month</th>
            <th>Revenue Type</th>
            <th>Revenue Amount</th>
          </tr> 
        ';
        while ($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr>
                <td>'.$row["revweek"].'</td>
                <td>'.$row["revdate"].'</td>
                <td>'.$row["revmonth"].'</td>
                <td>'.$row["revtype"].'</td>
                <td>'.$row["revamount"].'</td>
            </tr> 
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=revenue.xls");
        echo $output;
    }
}



?>