
<!DOCTYPE html>
<html> 
<head> 
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>vote section</title>
<link href="css/styles.css" rel="stylesheet" type="text/css"/>

</head>
<?php 
	include ('admin/conn.php');
	include('session.php');
?>
<body>
	<form>
	<section class="services">
	<!--heading---------------->
	<div class="s-heading">
	<h1>Online <font color="#4a90e2">Voting </font>System</h1>
	<p>Vote for president and Vice-President</p>
	<p><b>Welcome <?php echo $user_username; ?>!</b></p>
	</div>
	<!--services-box-container------------------->
	<div class="s-box-container">
	<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="1" src="images/one.jpg" />
	<!--servies-name---------->
	<h1>Oswald</h1> 
	<!--details------>
		<p>President</p>
	<!--btn---------->
	<a class="s-btn" href="poll.php">Vote</a>
	</div>
		<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="1" src="images/two.jpg" />
	<!--servies-name---------->
	<h1>Sadikiel</h1>
	<!--details------>
		<p>President</p>
	<!--btn---------->
	<a class="s-btn" href="poll2.php">Vote</a>
	</div>
		<!--service-box-3---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="3" src="images/tatu.jpg" />
	<!--servies-name---------->
	<h1>Baniani</h1>
	<!--details------>
		<p>President</p>
	<!--btn---------->
	<a class="s-btn" href="poll3.php">Vote</a>
	</div>
	</div>
	</section>
</form>
<?php
echo $ma;

	?>
</body>

</html>