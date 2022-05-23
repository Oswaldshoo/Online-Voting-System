<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","","project");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM `voters`";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM `voters` LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
            $view_data = mysqli_query($con,"SELECT * FROM `voters`");
  $no = 0;
  while($row = mysqli_fetch_array($view_data)){
  $no= $no + 1;

  echo "<tr><th>$no</th><td>$row[voting_id]</td> </td> <td>$row[firstname]</td> <td>$row[lastname]</td><td>$row[level]</td></td> <td>$row[status]</td></td> <td>$row[account]</td></td>
  <td ><a href='acti.php?Id=$row[id] '>Activate</a></td><td ><a href='diactivate.php?Id=$row[id] '>De-Activate</a></td>
  <td><a href='delete1.php?id=$row[id]'>Drop</a></td>
  </tr>";
  
    
  echo"
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>";"
        }
        mysqli_close($conn);
    ?>
    <table class="table" >
    <tr><th>No</th><th>Voting ID</th><th>First Name</th> <th>Last Name</th><th>Level</th> <th>Status</th><th>Account</th>
  <th>Activate</th><th>De-Activate</th>
  <th>Delete</th>
    </tr>
</table>

  
</body>
</html>