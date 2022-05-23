<?php

include ('conn.php');

 

  $id = $_GET['Id']; 

  $activate = mysqli_query($con, "UPDATE `voters` SET `account`='Active' WHERE `id` = '$id'");
        if ($activate == TRUE) {
          echo "<script>
        alert('User Activated');
         </script>";
        echo "<script>
         window.location.href = 'view_user.php';
         </script>";
          }
          else{
            echo "<script>
        alert('Failed to Activate');
         </script>";
         echo "<script>
         window.location.href = 'view_user.php';
         </script>";
          }

?>