<?php
session_start();
?>
<?php
	include ('admin/conn.php');

	
	 
		$idno=$_POST['idno'];
		$password=$_POST['psw']; 
        
//mine
        $check = "SELECT * FROM `voters` WHERE `voting_id` = '$idno' AND `password` = '$password' AND `status` = 'Unvoted' AND `account` = 'Active'";
        $result = mysqli_query($con,$check);
        $count = mysqli_fetch_array($result);

        $chec = "SELECT * FROM `voters` WHERE `voting_id` = '$idno' AND `password` = '$password' AND `status` = 'Voted' AND `account` = 'Active'";
        $resul = mysqli_query($con,$chec);
        $counti = mysqli_num_rows($resul);


        $checu = "SELECT * FROM `voters` WHERE `voting_id` = '$idno' AND `password` = '$password' AND `status` = 'Unvoted' AND `account` = 'not-active'";
        $resulu = mysqli_query($con,$checu);
        $countiu = mysqli_num_rows($resulu);

 

        //mine
        if ($countiu > 0) {
           echo "<script>
            alert('Pending for Verification!');
             </script>";
            
            echo "<script>
             window.location.href = 'index.php';
             </script>";
              }

		elseif ($counti > 0) {
            echo "<script>
            alert('Already vote! You Can only vote one time!');
             </script>";
            
            echo "<script>
             window.location.href = 'view.php';
             </script>"; 
        }

      elseif ($count > 0) {

           
            $_SESSION['voting_id'] = $count['voting_id'];

             echo "<script>
            alert('Login Succesfully!');
             </script>";

            echo "<script>
             window.location.href = 'vote.php';
             </script>"; 
            
        }
		else{ 
			echo "<script>
    alert('incorect pass');
     </script>";
    echo "<script>
             window.location.href = 'index.php';
             </script>";
    
		}
	
	
?>