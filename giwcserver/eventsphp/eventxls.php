<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
} 
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
$output = '';

if(isset($_POST["eventxls"]))
{
    $sql = "SELECT * FROM events";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .='
          <table>
          <tr>
            <th>Event Name</th>
            <th>Date From</th>
            <th>To</th>
            <th>Event Time</th>
            <th>Guest Speakers</th>
            <th>Event Income</th>
          </tr> 
        ';
        while ($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr>
                <td>'.$row["eventname"].'</td>
                <td>'.$row["fdate"].'</td>
                <td>'.$row["todate"].'</td>
                <td>'.$row["eventtime"].'</td>
                <td>'.$row["speakers"].'</td>
                <td>'.$row["eincome"].'</td>
            </tr> 
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=event.xls");
        echo $output;
    }
}



?>