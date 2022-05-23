<?php

include ('conn.php');
  $id = $_GET['Id']; 

    $check = "SELECT * FROM `voters` WHERE `id` = '$id' AND `account` = 'Active'";
        $result = mysqli_query($con,$check);
        $count = mysqli_fetch_array($result);

          if ($count > 0) {
            // code...
             echo "<script>
        alert('User Cannot be De-Activated');
         </script>";
        echo "<script>
         window.location.href = 'view_user.php';
         </script>";
          }

     ifelse ($count < 0) {
       // code...
      $activate = mysqli_query($con, "UPDATE `voters` SET `account` = 'Not-Active' WHERE `id` = '$id'");
        
          echo "<script>
        alert('User De-Activated');
         </script>";
        echo "<script>
         window.location.href = 'view_user.php';
         </script>";
          
     } else {
       // code...

            echo "<script>
        alert('Failed to De-Activate');
         </script>";
         echo "<script>
         window.location.href = 'view_user.php';
         </script>";
     }
     
     
          

?>