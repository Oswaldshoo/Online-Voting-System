<?php
session_start();
?>
<!DOCTYPE html>
   
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
 
<link rel="stylesheet" type="text/css" href="login.css">
 
</head>
  
<body>
  
<div id="container">
<form action="login_query.php" method="post" id="flogin">
 
<div class="border-box">
<h2>Login</h2>
<label for="uname" id="un">VotingID:</label>
<input type="text" name="idno" placeholder="Enter voting ID" id="uname"><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="psw" placeholder="Enter Password" id="upass"><br/>
 
<button type="submit" value="Login"  id="submit">Login</button>
 
<a href="reg.php">New Member</a>
</div>
 
</form>
</div>
 
</body>
</html>