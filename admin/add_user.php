<?php
//connection


include ('conn.php');

$uname = $_POST['username'];
$psw = $_POST['psw'];



$query = "SELECT * FROM `users` WHERE `username` = '$uname'";
$result = mysqli_query($con,$query);
if ($result) {
  if (mysqli_num_rows($result) > 0) {
   echo "<script>
alert('UserName Already Exist');
 </script>";
echo "<script>
 window.location.href = 'view_admin.php';
 </script>";
  } else {
    mysqli_query($con, "INSERT INTO `users`(`id`, `username`, `password`) VALUES (NULl, '$uname', '$psw')");
    echo "<script>
alert('User Successfully Added');
 </script>";
echo "<script>
 window.location.href = 'view_admin.php';
 </script>";
  }
} else {
  echo 'Error: '.mysqli_error();
}


	?>