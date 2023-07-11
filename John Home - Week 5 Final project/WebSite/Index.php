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
	<style>
	table{border: 1px solid black;width: 900px;}
	th{background-color: aqua;}
	th{border: 1px solid black;text-align: center;}
	td{border: 1px solid black;align:center;}
</style>
 <center>
	<?php
	// if user is logged in shows a table of classes they are registered for
		if(isset($_SESSION["username"]))
			{
			echo "<h1>Welcome: ".$_SESSION["username"],"</h1></div>";
			
			echo "<h1>You can review classes you have already registered for below.</h1>";
			echo "<h1>Or you can register for new classes by clicking Register for Classes.</h1>";
			
			require_once "dbconnect.php";
			
			$cID = $_SESSION['sID'];
			$nameArray = array();
			$idArray = array();
			
			$sqla = "SELECT tblregisteredclasses.classID, tblclasses.className, tblusers.studentID FROM tblclasses 
					LEFT JOIN tblregisteredclasses ON tblregisteredclasses.classID = tblclasses.classID
					LEFT JOIN tblusers ON tblregisteredclasses.studentID = tblusers.studentID
					WHERE tblusers.studentID = '$cID'";
			$result = $connection->query($sqla);
			
			
			if($result->num_rows > 0)
			{
				echo "<table><tr><th>Class Name</th><th>Class ID</th></tr>";
				
				while($row = $result->fetch_assoc())
				{
					echo "<tr><td>".$row['className']."</td><td>".$row['classID']."</td></tr>";
				}
				echo "</table>";
			}
			$connection->close();
			
			}
			
		//if user is not logged in directs them to login or sign up
		else
			{
				echo "<h1>Welcome to the Class Registration Portal</h1>";
				echo "<h1>Login or Signup to Proceed<h1>";
			}
	?>
	
	<?php //Creates a form to drop classes if user is logged in ?>
	<div class="container text-left">
	<?php if(isset($_SESSION["username"])) 
			{ 
				if($result->num_rows > 0)
				{?>
		<p> If you would like to drop a class. Enter the class ID and click drop: <P>
		<form method="post" action="drop.php">
			ClassID: <input type="text" name="classID"><br>
			<input type="submit">
		</form>
			<?php }} ?>
	</center>
	<?php require_once 'footer.php';?>
</body>
</html>