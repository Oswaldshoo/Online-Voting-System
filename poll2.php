<?php 
include ('admin/conn.php');
 include('data.php');
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>vote section</title>
<link rel="stylesheet" href="css/style1.css"> 
<body>

<div class="container">
  <div style="text-align:center">
    <h2>Presidential Candidate</h2>
    <p>You Vote as <?php echo $user_username; ?> of <?php echo $user_row['level']; ?><p>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/two.jpg" style="width:60%">
    </div>
    <div class="column">
    <center>  <form method="POST" action="count.php" >
      <?php
              $query = mysqli_query($con,"SELECT * FROM `candidate` WHERE `position` = 'President' && `value` = '2'") or die(mysqli_errno());
              
               $fetch = mysqli_fetch_array($query)
            
            ?>

      
        <br>
        <br>
        <label for="lname">Position - <?php echo $fetch['position']; ?></label>
        <br>
        <br>
        <br>
        <br>
        <label for="lname">First Name - <?php echo $fetch['firstname']; ?></label>
        <br>
        <br>
        <br>
        <br>
        <label for="country">Last Name - <?php echo $fetch['lastname']; ?></label>
        <br>
        <br> 
        <br>
        <br>
        <label for="subject">Level - <?php echo $fetch['level']; ?></label>
        <br>
        <br>
       <br>
        <input type = "checkbox" value = "<?php echo $fetch['id']; ?>" name = "pres_id" class = "president">
        <br>
         <br>
        <br>
        <input type="submit" value="Submit Your Vote">
      </form>
      </center>
    </div>
  </div>
</div>

</body>

</html>