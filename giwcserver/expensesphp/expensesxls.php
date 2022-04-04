<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata"); 
$output = '';

if(isset($_POST["xlsexpenses"]))
{
    $sql = "SELECT * FROM expenses";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .='
          <table>
          <tr>
          <th>Expense Name</th>
          <th>Expense Category</th>
          <th>Date</th>
          <th>Payment Method</th>
          <th>Month</th>
          <th>Expense Amount</th>
          </tr> 
        ';
        while ($row = mysqli_fetch_array($result))
        {
            $output .='
            <tr>
                <td>'.$row["expname"].'</td>
                <td>'.$row["expgory"].'</td>
                <td>'.$row["expdate"].'</td>
                <td>'.$row["paytm"].'</td>
                <td>'.$row["expmonth"].'</td>
                <td>'.$row["expamount"].'</td>
            </tr> 
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=expenses.xls");
        echo $output;
    }
}



?>