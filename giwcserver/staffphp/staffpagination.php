<?php
 $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");

 $results_per_page = 10;
 $query = "SELECT * FROM staff";
 $pageresult = mysqli_query($conn, $query);
 $number_of_results = mysqli_num_rows($pageresult);

 $number_of_pages = ceil($number_of_results/$results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  }else {
      $page = $_GET['page'];
  }

 $this_page_first_result =($page-1)*$results_per_page;


 $sql ="SELECT * FROM staff LIMIT " . $this_page_first_result . ',' . $results_per_page;
 $pageresult = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_array($pageresult))
    {?>
        <tr>
            <td><?php echo $row['staffno'];?></td>
            <td><?php echo $row['stfname'];?></td>
            <td><?php echo $row['surname'];?></td>
            <td><?php echo $row['stfdate'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['stfemail'];?></td>
            <td><?php echo $row['stfmobile'];?></td>
            <td><?php echo $row['stfaddress'];?></td>
            <td><?php echo $row['stfcity'];?></td>
            <td><?php echo $row['jobdesc'];?></td>
            <td><?php echo $row['chapel'];?></td>
            <td><?php echo $row['empsince'];?></td>
            <td><a href="staffedit.php?staffno=<?php echo $row['staffno']; ?>">Edit</a></td>
            <td><a href="staffdelete.php?staffno=<?php echo $row['staffno']; ?>">Delete</a></td>
            <td><a href="view.php?offweek=<?php echo $row['staffno']; ?>">View</a></td>
        </tr>
        <?php
         }
  for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="staff.php?page=' . $page . '">' . $page . '</a>';
  }

?>
