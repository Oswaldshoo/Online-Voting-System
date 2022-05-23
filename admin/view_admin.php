<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin List</title>
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
  <center><h2>The list of Users/Admin  </h2></center>
   
<br>
<br>
  <table class="table" >
    <tr><th>ID</th><th>Username</th><th>Password</th>
  <th>Edit</th>
  <th>Delete</th>
    </tr>

      <!-- add data-->

  <?php

   include ('conn.php');

  $view_data = mysqli_query($con,"SELECT * FROM `users`");
  $no = 0;
  while($row = mysqli_fetch_array($view_data)){
  $no= $no + 1;

  echo "<tr><td>$row[id]</td> <td>$row[username]</td> </td> <td>$row[password]</td>
  <td ><a href='update.php?Id=$row[id] '>Edit</a></td>
  <td><a href='delete.php?id=$row[id]'>Drop</a></td>
  </tr>";
  }
    ?>
  </table>

        </div>
        <?php include ('add.php');?>
        
    </div>
</body>
</html>
