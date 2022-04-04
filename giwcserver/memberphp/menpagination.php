<?php
 $conn = mysqli_connect("127.0.0.1:3307","root","","giwcdata");

 $results_per_page = 10;
 $query = "SELECT * FROM membership";
 $pageresult = mysqli_query($conn, $query);
 $number_of_results = mysqli_num_rows($pageresult);

 $number_of_pages = ceil($number_of_results/$results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  }else {
      $page = $_GET['page'];
  }

 $this_page_first_result =($page-1)*$results_per_page;


 $sql ="SELECT * FROM membership LIMIT " . $this_page_first_result . ',' . $results_per_page;
 $pageresult = mysqli_query($conn,$sql);

 while ($row = mysqli_fetch_array($pageresult))
 {?>
     <tr>
         <td><?php echo $row['memberno'];?></td>
         <td><?php echo $row['firstName'];?></td>
         <td><?php echo $row['surname'];?></td>
         <td><?php echo $row['date'];?></td>
         <td><?php echo $row['gender'];?></td>
         <td><?php echo $row['status'];?></td>
         <td><?php echo $row['email'];?></td>
         <td><?php echo $row['mobile'];?></td>
         <td><?php echo $row['maddress'];?></td>
         <td><?php echo $row['city'];?></td>
         <td><?php echo $row['group1'];?></td>
         <td><?php echo $row['group2'];?></td>
         <td><?php echo $row['chapel'];?></td>
         <td><?php echo $row['since'];?></td>
         <td><a href="edit.php?memberno=<?php echo $row['memberno']; ?>">Edit</a></td>
         <td><a href="delete.php?memberno=<?php echo $row['memberno']; ?>">Delete</a></td>
         <td><a href="../profilesphp/profile.php?memberno=<?php echo $row['memberno']; ?>">View</a></td>
     </tr>
     <?php
      }

  for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="men.php?page=' . $page . '">' . $page . '</a>';
  }

?>
