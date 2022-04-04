<?php
 $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");

 $results_per_page = 10;
 $query = "SELECT * FROM events";
 $pageresult = mysqli_query($conn, $query);
 $number_of_results = mysqli_num_rows($pageresult);

 $number_of_pages = ceil($number_of_results/$results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  }else {
      $page = $_GET['page'];
  }

 $this_page_first_result =($page-1)*$results_per_page;


 $sql ="SELECT * FROM events LIMIT " . $this_page_first_result . ',' . $results_per_page;
 $pageresult = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_array($pageresult))
    {?>
        <tr>
            <td><?php echo $row['eventname'];?></td>
            <td><?php echo $row['fdate'];?></td>
            <td><?php echo $row['todate'];?></td>
            <td><?php echo $row['eventtime'];?></td>
            <td><?php echo $row['speakers'];?></td>
            <td><?php echo $row['eincome'];?></td>
            <td><a href="eventedit.php?eventname=<?php echo $row['eventname']; ?>">Edit</a></td>
            <td><a href="eventdelete.php?eventname=<?php echo $row['eventname']; ?>">Delete</a></td>
            <td><a href="view.php?eventname=<?php echo $row['eventname']; ?>">View</a></td>
        </tr>
        <?php
         }
  for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="events.php?page=' . $page . '">' . $page . '</a>';
  }

?>
