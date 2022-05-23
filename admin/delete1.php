<?php 
//connection
include ('conn.php');


$id = $_GET['id']; 
$delete_data = mysqli_query($con,"DELETE FROM `voters` WHERE `id` = '$id' ");

            echo "<script>
            alert('Voter is deleted successfully!');
             </script>";
             
             echo "<script>
             window.location.href = 'view_user.php';
             </script>";
?>