	<?php
//connection

  
include ('admin/conn.php');
include('data.php');


    

        if (isset($_POST['pres_id'])) {
           // code...
         $vote = $_POST['pres_id'];

        $chec = "SELECT * FROM `votes` WHERE `voting_id` = '$ide'";
        $resul = mysqli_query($con,$chec);
        $counti = mysqli_num_rows($resul);
         if ($counti > 0) {
              // code...
            echo "<script>
              alert('Already vote! You Can only vote one time!');
               </script>";
                echo "<script>
               window.location.href = 'view.php';
               </script>";
            }

               if ($counti == 0) {
                   // code...
                  $enter = mysqli_query($con, "INSERT INTO `votes` (`id`, `voting_id`, `candidate_id`, `time`) VALUES (NULL, '$ide', '$vote', current_timestamp())");

        $act = mysqli_query($con, "UPDATE `voters` SET `status`='Voted' WHERE `voting_id` = '$ma'");

               
                   // code... 
                  echo "<script>
              alert('Thank you for voting');
               </script>";
               
              echo "<script>
               window.location.href = 'view.php';
               </script>";
                }
                 

      }
      else{
         echo "<script>
              alert('Please Tick Vote');
               </script>";
               
              echo "<script>
               window.location.href = 'vote.php';
               </script>";
      }

              	?>
