<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Candidates</title>
	<link rel="stylesheet" href="styles.css">
</head>
<?php include ('head.php');?>
<body>

  

<!--This si sideber code-->
<div class="row">
<div class="sidebar">
<?php include ('side.php');?>
</div>

<div class="main">
  <center><h2>Candidates  </h2></center>
  
<br>
<br>
  <table class="table" >
    <tr><th>Candidate ID</th><th>First Name</th> <th>Last Name</th> <th>Position</th> <th>Level</th><th>Value</th>
  <th>Edit</th>
  <th>Delete</th>
    </tr>

      

  <?php
  include ('conn.php');

  $view_data = mysqli_query($con,"SELECT * FROM `candidate`");
  $no = 0;
  while($row = mysqli_fetch_array($view_data)){
  $no= $no + 1;

  echo "<tr><td>$row[candidate_id]</td> </td> <td>$row[firstname]</td> <td>$row[lastname]</td> <td>$row[position]</td> <td>$row[level]</td><td>$row[value]</td>
  <td ><a href='update.php?Id=$row[id] '>Edit</a></td>
  <td><a href='delete1.php?id=$row[id]'>Drop</a></td>
  </tr>";
  }
    ?>
  </table>

</div>
<?php include ('add2.php');?>
</div>
</body>
</html>
