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
input[type=text], input[type=password]{
    width:20%;
    padding:7px 10px;
    margin: 10px 0;
    display:inline-block; 
    border: 1px solid #ccc;
    box-sizing: border-box;
    }
     
    button{
    background-color:#4CAF50;
    width: 10%;
    padding: 9px 5px;
    margin:10px 0px 0px 35px;
    cursor:pointer;
    border:none;
    color:#ffffff;
    font-size: 15px;
    font-weight: bold;
    }
</style>
</head>
<?php include ('head.php');?>
<body>

   

<!--This si sideber code-->
<div class="row">
<div class="sidebar">
<?php include ('side.php');?>
</div>
<?php
   include ('conn.php');

    $queryi = mysqli_query($con, "SELECT COUNT(1)  FROM `voters`");
    $counti = mysqli_fetch_array($queryi);
    $rowi = $counti[0];
     ?>
<div class="main">
  <center><h2>Total Registered Voter are: <?php echo $rowi; ?>   </h2></center>
  <div class="button">
    <center>
<form action="search.php" method="post">
 <input type="text" placeholder="Enter First Name" name="search">
<button type="submit" value="Login"  id="submit">Search</button>
</form></center>
<a class="act" href="activate.php">Activate All Users</a>

<a class="acti" href="../reg.php">Add Voter</a>
</div>
<br>
<br>
  <table class="table" >
    <tr><th>No</th><th>Voting ID</th><th>First Name</th> <th>Last Name</th><th>Level</th> <th>Status</th><th>Account</th>
  <th>Activate</th><th>De-Activate</th>
  <th>Delete</th>
    </tr>

       

  <?php
 include ('conn.php');

  $view_data = mysqli_query($con,"SELECT * FROM `voters` LIMIT 10");
 // SELECT * FROM table limit 100`
  $no = 0;
  while($row = mysqli_fetch_array($view_data)){
  $no= $no + 1;
 
  echo "<tr><th>$no</th><td>$row[voting_id]</td> </td> <td>$row[firstname]</td> <td>$row[lastname]</td><td>$row[level]</td></td> <td>$row[status]</td></td> <td>$row[account]</td></td>
  <td ><a href='acti.php?Id=$row[id] '>Activate</a></td><td ><a href='diactivate.php?Id=$row[id] '>De-Activate</a></td>
  <td><a href='delete1.php?id=$row[id]'>Drop</a></td>
  </tr>";
  }
    ?>
  </table>

<div class="pagination" ><p><b></b></p>
  &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a href="user2.php">❯</a>
</div>

</div>


</div>






</body>
</html>
