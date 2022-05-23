<?php

//connection

include ('conn.php');

//receive data
		$id_number = $_POST['uname'];
		$password = $_POST['psw'];
		

$check = "SELECT * FROM `users` WHERE `username` = '$id_number' AND`password` = '$password'";
$result = mysqli_query($con,$check);
	$count = mysqli_num_rows($result);
	if ($count > 0) {
		echo "<script>
alert('Welcome Back');
 </script>";

echo "<script>
 window.location.href = 'dashboard.php';
 </script>";
	}else{
		echo "<script>
alert('Incorrect Username or Password Please try again!');
 </script>";
 echo "<script>
 window.location.href = 'index.php';
 </script>";
	}

?>