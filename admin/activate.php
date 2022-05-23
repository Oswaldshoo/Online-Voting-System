<?php

include ('conn.php');

$activate = mysqli_query($con, "UPDATE `voters` SET `account`='Active' WHERE `account` = 'Not-Active'");

if ($activate == TRUE) {
  echo "<script>
alert('Users Activated');
 </script>";
echo "<script>
 window.location.href = 'view_user.php';
 </script>";
	}else{
		echo "<script>
alert('Failed to Activate');
 </script>";
 echo "<script>
 window.location.href = 'view_user.php';
 </script>";
	}

?>
