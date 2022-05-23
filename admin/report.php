 <!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Report</title>
	<link rel="stylesheet" href="styles.css">
</head>
<button onclick="window.print()">Print</button
<body>

<?php
     include ('conn.php');

    $queryi = mysqli_query($con, "SELECT COUNT(1)  FROM `votes`");
    $counti = mysqli_fetch_array($queryi);
    $rowi = $counti[0];


    $queryiq = mysqli_query($con, "SELECT COUNT(1)  FROM `voters`");
    $countiq = mysqli_fetch_array($queryiq);
    $rowiq = $countiq[0];
     ?>
  <center><h2>Voting Result </h2> </center>
 <center><b>Total Registered Voter are: <u><?php echo $rowiq; ?></u>  </b>&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<b>Total votes is: <u> <?php echo $rowi; ?></u></b> </center>

<!--This si sideber code-->
<div class="row">

<div class="main">
	


<table class="table" >
    <tr><th>First Name</th> <th>Last Name</th> <th>Position</th> <th>Total Votes</th><th>Percentage</th>
  
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
 

    echo "<tr> <td>$row[firstname]</td> <td>$row[lastname]</td> <td>$row[position]</td> <td><b>$count[total]</b></td>      <td><b> $ka %</b></td>
  </tr>";
 }
    ?>
  </table>
</div>
</div>
</body>
</html>
