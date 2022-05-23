<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
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
	<?php
	 include ('conn.php');

   	$queryi = mysqli_query($con, "SELECT COUNT(1)  FROM `votes`");
   	$counti = mysqli_fetch_array($queryi);
   	$rowi = $counti[0];


    $queryiq = mysqli_query($con, "SELECT COUNT(1)  FROM `voters`");
    $countiq = mysqli_fetch_array($queryiq);
    $rowiq = $countiq[0];
     ?>
 
  <center> <b><h2>Total Registered Voter are: <?php echo $rowiq; ?>  </h2></b> </center>

  <center><b><h2>Total votes is: <?php echo $rowi; ?></h2></b> </center>

<table class="table" >
    <tr><th>Candidate ID</th><th>First Name</th> <th>Last Name</th> <th>Position</th> <th>Total Votes</th><th>Percentage</th>
  
    </tr>

<?php

      include ('conn.php');


   $act = mysqli_query($con, "SELECT * FROM `candidate` WHERE `position` = 'President'");
   while($row = mysqli_fetch_array($act)){

   	$id = $row['id'];
   	$query = mysqli_query($con, "SELECT COUNT(*) as `total` FROM `votes` WHERE `candidate_id` = '$id'");
   	$count = mysqli_fetch_array($query);
    $ma = $count[0];

    $queryi = mysqli_query($con, "SELECT COUNT(1)  FROM `votes`");
    $counti = mysqli_fetch_array($queryi);
    $rowi = $counti[0];
    
    $per = $ma * 100  / $rowi; 

    $ka = round($per,2);
 

   	echo "<tr><td>$row[candidate_id]</td> </td> <td>$row[firstname]</td> <td>$row[lastname]</td> <td>$row[position]</td> <td><b>     $count[total]</b></td>     <td><b> $ka %</b></td>
  </tr>";
 }
    ?>
  </table>
</div>
</div>
</body>
</html>
