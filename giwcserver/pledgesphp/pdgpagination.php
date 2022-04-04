<?php
 $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");

 $results_per_page = 10;
 $query = "SELECT * FROM pledges";
 $pageresult = mysqli_query($conn, $query);
 $number_of_results = mysqli_num_rows($pageresult);

 $number_of_pages = ceil($number_of_results/$results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  }else {
      $page = $_GET['page'];
  }

 $this_page_first_result =($page-1)*$results_per_page;


 $sql ="SELECT * FROM pledges LIMIT " . $this_page_first_result . ',' . $results_per_page;
 $pageresult = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_array($pageresult))
    {?>
        <tr>
            <td><?php echo $row['pdgname'];?></td>
            <td><?php echo $row['pdgory'];?></td>
            <td><?php echo $row['pgdate'];?></td>
            <td><?php echo $row['pdgstatus'];?></td>
            <td><?php echo $row['pdgmonth'];?></td>
            <td><?php echo $row['pdgamount'];?></td>
            <td><a href="pledgedit.php?pdgname=<?php echo $row['pdgname']; ?>">Edit</a></td>
            <td><a href="plegdelete.php?pdgname=<?php echo $row['pdgname']; ?>">Delete</a></td>
            <td><a href="view.php?expname=<?php echo $row['pdgname']; ?>">View</a></td>
        </tr>
        <?php
         }
  for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="pledges.php?page=' . $page . '">' . $page . '</a>';
  }

?>
