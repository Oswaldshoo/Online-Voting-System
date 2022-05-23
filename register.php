 
  <!DOCTYPE html>
  <html>
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Admin</title>
  	<link rel="stylesheet" href="styles.css">
  </head>
  <?php include ('head.php');?>
  <body>


  <!--This si sideber code-->
  <div class="row">
  

  <div class="main">
  <center>			<form  method="POST" action="chek.php">

				    <h2><center>Registration</center></h2>
				    <p>Please Enter the Detail Needed Below</p>
				    <hr>
				    <br>
				    <label><b>ID Number</b></label>
				    <input type="text" placeholder="Enter ID Number" name="votingid" required>
				<br>
				    <label><b>First name</b></label>
				    <input type="text" placeholder="Enter first name" name="firstname" required>
				<br>
				    <label ><b>Last name</b></label>
				    <input type="text" placeholder="Enter last name" name="lastname" required>
				<br>
				    <label ><b>Password</b></label>
				    <input type="password" placeholder="Enter password" name="password" required>
				<br>
				     <label for="psw"><b>Level</b></label>
				     <select name="year_level">
				     <option></option>
				     <option>1st Year</option>
				     <option>2nd Year</option>
				     <option>3rd Year</option>
				     <option>4th Year</option>
				</select>
				<br>
				    <button type="submit">Register</button>
				</form></center>
  </div>
  </div>
  </body>
  </html>
