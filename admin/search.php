
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" href="styles.css">
  <style>
  .pagination {
  display: inline-block;

}

.pagination a {
  color: black;
  float: center;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<?php include ('head.php');?>
<body>

   

<!--This si sideber code-->
<div class="row">
<div class="sidebar">
<?php include ('side.php');?>
</div>

<div class="main">
  <center><h2>The list of Voters Contain "<?php  echo $_POST['search']; ?>"   </h2></center>


<br>
  <table class="table" >
    <tr><th>No</th><th>Voting ID</th><th>First Name</th> <th>Last Name</th><th>Level</th> <th>Status</th><th>Account</th>
  <th>Activate</th><th>De-Activate</th>
  <th>Delete</th>
    </tr>
 
       

  <?php
 include ('conn.php');
 $search = $_POST['search'];


$sql = "SELECT * FROM `voters` WHERE `firstname`  LIKE '%$search%' ";
$result = $con->query($sql);
$no = 0;
if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	$no= $no + 1;
	echo "<tr><th>$no</th><td>$row[voting_id]</td> </td> <td>$row[firstname]</td> <td>$row[lastname]</td><td>$row[level]</td></td> <td>$row[status]</td></td> <td>$row[account]</td></td>
  <td ><a href='acti.php?Id=$row[id] '>Activate</a></td><td ><a href='diactivate.php?Id=$row[id] '>De-Activate</a></td>
  <td><a href='delete1.php?id=$row[id]'>Drop</a></td>
  </tr>";
}
} else {
	echo "<script>
alert('No Result Found!');
 </script>";
echo "<script>
 window.location.href = 'view_user.php';
 </script>";
}


    ?>
  </table>



</div>


</div>

</body>
</html>

