<?php
 $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");

 $results_per_page = 10;
 $query = "SELECT * FROM revenue";
 $pageresult = mysqli_query($conn, $query);
 $number_of_results = mysqli_num_rows($pageresult);

 $number_of_pages = ceil($number_of_results/$results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  }else {
      $page = $_GET['page'];
  }

 $this_page_first_result =($page-1)*$results_per_page;


 $sql ="SELECT * FROM revenue LIMIT " . $this_page_first_result . ',' . $results_per_page;
 $pageresult = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_array($pageresult))
    {?>
        <tr>
            <td><?php echo $row['revweek'];?></td>
            <td><?php echo $row['revdate'];?></td>
            <td><?php echo $row['revmonth'];?></td>
            <td><?php echo $row['revtype'];?></td>
            <td><?php echo $row['revamount'];?></td>
            <td><a href="revedit.php?revweek=<?php echo $row['revweek']; ?>">Edit</a></td>
            <td><a href="revdelete.php?revweek=<?php echo $row['revweek']; ?>">Delete</a></td>
            <td><a href="view.php?id=<?php echo $row['revweek']; ?>">View</a></td>
        </tr>
        <?php
         }
  for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="revenue.php?page=' . $page . '">' . $page . '</a>';
  }

?>
