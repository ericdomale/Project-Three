<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
$output = '';

if(isset($_POST["pledgexls"]))
{
    $sql = "SELECT * FROM pledges";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .='
          <table>
          <tr>
            <th>Pledger Name</th>
            <th>Pledge Category</th>
            <th>Date</th>
            <th>Current Status</th>
            <th>Month</th>
            <th>Amount Pledged</th>
          </tr> 
        ';
        while ($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr>
                <td>'.$row["pdgname"].'</td>
                <td>'.$row["pdgory"].'</td>
                <td>'.$row["pgdate"].'</td>
                <td>'.$row["pdgstatus"].'</td>
                <td>'.$row["pdgmonth"].'</td>
                <td>'.$row["pdgamount"].'</td>
            </tr> 
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=pledge.xls");
        echo $output;
    }
}



?>