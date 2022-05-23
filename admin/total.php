<?php

      include ('conn.php');


   $act = mysqli_query($con, "SELECT COUNT(candidate_id) FROM `votes` WHERE `candidate_id` = '5673'");












?>