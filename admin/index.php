<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles5.css">
</head>
<body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="icon-admin.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="valid.php">
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="psw" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">#TechIsFuture</a>
    </div>

  </div>
</div>

</body>
</html>
   