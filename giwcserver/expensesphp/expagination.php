<?php
 $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");

 $results_per_page = 10;
 $query = "SELECT * FROM expenses";
 $pageresult = mysqli_query($conn, $query);
 $number_of_results = mysqli_num_rows($pageresult);

 $number_of_pages = ceil($number_of_results/$results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  }else {
      $page = $_GET['page'];
  }

 $this_page_first_result =($page-1)*$results_per_page;


 $sql ="SELECT * FROM expenses LIMIT " . $this_page_first_result . ',' . $results_per_page;
 $pageresult = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_array($pageresult))
    {?>
        <tr>
            <td><?php echo $row['expname'];?></td>
            <td><?php echo $row['expgory'];?></td>
            <td><?php echo $row['expdate'];?></td>
            <td><?php echo $row['paytm'];?></td>
            <td><?php echo $row['expmonth'];?></td>
            <td><?php echo $row['expamount'];?></td>
            <td><a href="expedit.php?expname=<?php echo $row['expname']; ?>">Edit</a></td>
            <td><a href="expdelete.php?expname=<?php echo $row['expname']; ?>">Delete</a></td>
            <td><a href="view.php?expname=<?php echo $row['expname']; ?>">View</a></td>
        </tr>
        <?php
         }
  for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="expenses.php?page=' . $page . '">' . $page . '</a>';
  }

?>
