<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
$output = '';

if(isset($_POST["offeringxls"]))
{
    $sql = "SELECT * FROM offerings";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .='
          <table>
          <tr>
            <th>Week</th>
            <th>Date</th>
            <th>Program</th>
            <th>Offering Type</th>
            <th>Offering Amount</th>
            <th>Tithe Amount</th>
          </tr> 
        ';
        while ($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr>
                <td>'.$row["offweek"].'</td>
                <td>'.$row["offdate"].'</td>
                <td>'.$row["offprogram"].'</td>
                <td>'.$row["offertype"].'</td>
                <td>'.$row["ofamount"].'</td>
                <td>'.$row["thamount"].'</td>
            </tr> 
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=offering.xls");
        echo $output;
    }
}



?>