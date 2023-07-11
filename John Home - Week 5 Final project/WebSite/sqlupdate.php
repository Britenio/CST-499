<!DOCTYPE html>
<html lang="en">
<head>
	<title> Register </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
<?php require 'master.php';?>



<?php
//connects to MySQL Database
require_once "dbconnect.php";	
	
	$ID = '';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$address = $_POST['address'];
	$phoneNumber = $_POST['phone_number'];
	
	//registers new user
	$sql="INSERT INTO tblusers(firstName,lastname,address,email, phone, password, role) 
	VALUES('$firstName','$lastName','$address', '$email', '$phoneNumber', '$password', 'ST')";
	
	if(mysqli_query($connection, $sql))
	{
		echo "<h1>You Have Successfully Registered</h1>";
		session_start();
		$_SESSION['username']=$email;
		$connection->close();
		header('location: logout.php');
	}
	else
	{
		echo "<h1>Registration has Failed. Please contact and administrator.</h1>"
		.mysqli_error($connection);
		$connection->close();
	}

?>

<?php require_once 'footer.php';?>
	</center>
</body>