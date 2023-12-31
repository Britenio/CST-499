<?php
	//error_reporting(E_ALL ^ E_NOTICE);
	ini_set('session.use_only_cookies','1');
	session_start();
?>

<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="jumbotron">
		<div class="container text-center">
			<h1> Class Registration Portal </h1>
		</div>
	</div>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class"collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span> AboutUs</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php
					//ini_set('session.use_only_cookies','1');
					//session_start();
				
					if(isset($_SESSION["username"]))
						{
							echo '<li><a href="registration.php"><span class"glyphicon glyphicon-briefcase"></span> Register For Classes</a></li>';
							echo '<li><a href="logout.php"><span class=glyphicon glyphicon-off"></span> Logout</a></li>';
						}
					else
						{
							echo '<li><a href="loginpage.php"><span class"glyphicon glyphicon-briefcase"></span> Login</a></li>';
							echo '<li><a href="signup.php"><span class=glyphicon glyphicon-off"></span> Signup</a></li>';
						}
				?>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>