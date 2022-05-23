
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
	<link rel="stylesheet" href="styles.css">

</head>

<body>
 
 

<!--This si sideber code-->


<div class="maini">

    <a class="acta" href="logout.php">Logout</a> </div>
	<?php
	 include ('admin/conn.php');
 
   	$queryi = mysqli_query($con, "SELECT COUNT(*)  FROM `votes`");
   	$counti = mysqli_fetch_array($queryi);
   	$rowi = $counti[0];
     ?>
 <center><h1>Real-time Voting Result </h1>

  <p><b><h2>Total votes is <?php echo $rowi; ?></h2></b> <p></center>
<table class="table" >
    <tr><th>First Name</th> <th>Last Name</th> <th>Position</th> <th>Total Votes</th><th>Percentage</th>
  
    </tr>

<?php

      include ('admin/conn.php');

$queryi = mysqli_query($con, "SELECT COUNT(1)  FROM `votes`");
    $counti = mysqli_fetch_array($queryi);
    $rowi = $counti[0];
     
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
 

   	echo "<tr> <td>$row[firstname]</td> <td>$row[lastname]</td> <td>$row[position]</td> <td><b>$count[total]</b></td>      <td><b> $ka %</b></td>
  </tr>";
 }
    ?>
  </table>


</body>
</html>


