<?php 
//connection
include ('conn.php');


$id = $_GET['id']; 
$delete_data = mysqli_query($con,"DELETE FROM `users` WHERE `id` = '$id' ");

echo "<script>
alert('User is deleted successfully!');
 </script>";
 echo "<script>
 window.location.href = 'view_admin.php';
 </script>";
?>