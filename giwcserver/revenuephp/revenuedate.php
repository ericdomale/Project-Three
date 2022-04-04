<?php

/*session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}


$conn = mysqli_connect("127.0.0.1:3307", "root", "", "giwcdata");


    if(isset($_GET['fromdate']) && isset($_GET['todate']))
    {
        $fromdate = $_GET['fromdate'];
        $todate = $_GET['todate'];

        $query = "SELECT * FROM revenue WHERE revdate BETWEEN '$fromdate' AND '$todate'";
        $queryrun = mysqli_query($conn, $query);
       
        if(mysqli_num_rows($queryrun) > 0)
        {
            foreach($queryrun as $row)
            {?>
                <tr>
                    <td><?php echo $row['revid'];?></td>
                    <td><?php echo $row['revweek'];?></td>
                    <td><?php echo $row['revdate'];?></td>
                    <td><?php echo $row['revmonth'];?></td>
                    <td><?php echo $row['revtype'];?></td>
                    <td><?php echo $row['revamount'];?></td>
                    <td><a href="revedit.php?revid=<?php echo $row['revid']; ?>" class="edit">Edit</a></td>
                    <td><a href="revdelete.php?revweek=<?php echo $row['revweek']; ?>" class="delete">Delete</a></td>
                    <!--<td><a href="view.php?id=<?php echo $row['revweek']; ?>"class="view">View</a></td>-->
                </tr>
            <?php 
            }
        }else
        {
            echo "no";
        }
    }*/?>

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
$query = "SELECT * FROM revenue WHERE revdate BETWEEN '".$_POST["fromdate"]."' AND '".$_POST["todate"]."'";
$queryrun = mysqli_query($conn, $query);

$output .= "<thead>
<tr>
    <th>ID</th>
    <th>Week</th>
    <th>Date</th>
    <th>Month</th>
    <th>Revenue Type</th>
    <th>Revenue Amount</th>
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
        <td>'. $row["revid"] .'</td>
        <td>'. $row["revweek"] .'</td>
        <td>'. $row["revdate"] .'</td>
        <td>'. $row["revmonth"] .'</td>
        <td>'. $row["revtype"] .'</td>
        <td>'. $row["revamount"] .'</td>
        <td><a href="revedit.php?revid='. $row["revid"] .'" class="edit">Edit</a></td>
        <td><a href="revdelete.php?revweek='. $row["revid"] .'" class="delete">Delete</a></td>
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