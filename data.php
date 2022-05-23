<?php

 session_start();
?>
<?php
	require 'admin/conn.php'; 


	if(isset ($_SESSION['voting_id'])){ 
		//header("location:index.php");
	
		$session_id = $_SESSION['voting_id'];
		$user_query = mysqli_query($con, "SELECT * FROM `voters` WHERE `voting_id` = '$session_id' ") or die(mysqli_errno());
		$user_row = mysqli_fetch_array($user_query);
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
		$ma = $user_row['voting_id'];
		$ide = $user_row['id'];
	}
	else{
		
		
		echo "<script>
            alert('Please log-in First!');
             </script>";

              echo "<script>
             window.location.href = 'index.php';
             </script>"; 
		
	}
?>  