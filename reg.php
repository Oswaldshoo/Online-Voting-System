<!DOCTYPE html>
<html> 
<head>
<meta charset="ISO-8859-1">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
 
<body bgcolor="#E6E6FA">
  
<form name="regi" action="chek.php" method="post">
<h2>Registration</h2>

<label for="r1" id="fn">Voting ID :</label>
<input type="text" name="votingid" id="r1"><br/>
 
<label for="r1" id="fn">First Name :</label>
<input type="text" name="firstname" id="r1"><br/>
 
<label  for="r2" id="ln">Last Name :</label>
<input type="text" name="lastname" id="r2"><br/>
 
<label  for="r4" id="pwd">Password :</label>
<input type="password" name="password" id="r4"><br/>
 
 
 
<label for="r8" id="cy">Level:</label>
 
<select name="year_level" id="r8">
<option>Select</option>
<option>Cetrificate</option>
<option>Dip I</option>
<option>Dip II</option>
<option>Bachr Degree I</option>
<option>Bach II</option>
<option>Bach Degree III</option>
<option>Masters I</option>
<option>Masters II</option>
<option>PhD</option>
</select><br/><br/>
 
<button type="submit" value="Submit" id="button">Register</button>
<a href="index.php">Back to Home</a>
 
</form>
 
<script type="text/javascript">
function save(){
var user = document.getElementById("user").value;
var pwd = document.getElementById("pwd").value;
alert("username"+user+"password"+pwd);
}
</script>
 
</body>
</html>