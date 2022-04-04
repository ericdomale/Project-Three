<?php

session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}


if(isset($_POST["fromdate"], $_POST["todate"]))
{


$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");
$output ='';
$query = "SELECT * FROM monetary WHERE mondate BETWEEN '".$_POST["fromdate"]."' AND '".$_POST["todate"]."'";
$queryrun = mysqli_query($conn, $query);

$output .= "<thead>
<tr>
    <th>ID</th>
    <th>Week</th>
    <th>Date</th>
    <th>Month</th>
    <th>Revenue Type</th>
    <th>Amount</th>
    <th>Actions</th>
    <th></th>
</tr>
</thead>";

if(mysqli_num_rows($queryrun) > 0)
{
    while($row = mysqli_fetch_array($queryrun))
    {
        $output .=' 
        <tr>
        <td>'. $row["monid"] .'</td>
        <td>'. $row["monweek"] .'</td>
        <td>'. $row["mondate"] .'</td>
        <td>'. $row["monetmonth"] .'</td>
        <td>'. $row["montype"] .'</td>
        <td>'. $row["monprogram"] .'</td>
        <td>'. $row["monamount"] .'</td>
        <td><a href="revedit.php?monid='. $row["monid"] .'" class="edit">Edit</a></td>
        <td><a href="revdelete.php?monweek='. $row["monid"] .'" class="delete">Delete</a></td>
    </tr>';
    }
}
else
{
    $output .= '<tr><td>No Dates Found</td></tr>';
} 
$output.='</table>';
echo $output;

}
?>