<?php
//connection


include ('conn.php');

$cid = $_POST['cid'];
$fname = $_POST['fname']; 
$lname = $_POST['lname'];
$position = $_POST['position'];
$level = $_POST['level'];
$value = $_POST['value'];


$query = "SELECT * FROM `candidate` WHERE `candidate_id` = '$cid'";
$result = mysqli_query($con,$query);
if ($result) {
  if (mysqli_num_rows($result) > 0) {
   echo "<script>
alert('Candidate Already Exist');
 </script>";
echo "<script>
 window.location.href = 'view_candidate.php';
 </script>";
  } else {
    mysqli_query($con, "INSERT INTO `candidate`(`id`, `candidate_id`, `firstname`, `lastname`, `position`, `level`, `value`) VALUES (NULl, '$cid', '$fname', '$lname', '$position', '$level', '$value')");
    echo "<script>
alert('Candidate Successfully Added');
 </script>";
echo "<script>
 window.location.href = 'view_candidate.php';
 </script>";
  }
} else {
  echo 'Error: '.mysqli_error();
}


	?>