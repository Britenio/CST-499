<?php
	//error-reporting(E_ALL ^ E_NOTICE)
?>
<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<?php require 'master.php';?>
	
 <center>
	<?php
		if(isset($_SESSION["username"]))
			{
			echo "<h1>Welcome, ".$_SESSION['username'],"</h1></div>";
			
			echo "<h1>You can review classes you have already registered for below.</h1>";
			echo "<h1>Or you can register for new classes by clicking Register for Classes.</h1>";
			}
		else
			{
				echo "<h1>Welcome to the Class Registration Portal</h1>";
				echo "<h1>Login or Signup to Proceed<h1>";
			}
	?>
	</center>
	<?php require_once 'footer.php';?>
</body>
</html>