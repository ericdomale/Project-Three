<?php
 $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");

 $results_per_page = 10;
 $query = "SELECT * FROM offerings";
 $pageresult = mysqli_query($conn, $query);
 $number_of_results = mysqli_num_rows($pageresult);

 $number_of_pages = ceil($number_of_results/$results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  }else {
      $page = $_GET['page'];
  }

 $this_page_first_result =($page-1)*$results_per_page;


 $sql ="SELECT * FROM offerings LIMIT " . $this_page_first_result . ',' . $results_per_page;
 $pageresult = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_array($pageresult))
 {?>
     <tr>
         <td><?php echo $row['offweek'];?></td>
         <td><?php echo $row['offdate'];?></td>
         <td><?php echo $row['offprogram'];?></td>
         <td><?php echo $row['offertype'];?></td>
         <td><?php echo $row['ofamount'];?></td>
         <td><?php echo $row['thamount'];?></td>
         <td><a href="offedit.php?offweek=<?php echo $row['offweek']; ?>">Edit</a></td>
         <td><a href="offdelete.php?offweek=<?php echo $row['offweek']; ?>">Delete</a></td>
         <td><a href="view.php?offweek=<?php echo $row['offweek']; ?>">View</a></td>
     </tr>
 <?php }
  for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="offering.php?page=' . $page . '">' . $page . '</a>';
  }

?>
