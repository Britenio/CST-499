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
<?php include 'master.php';?>

<div class="container text-left">
<?php
	require_once "dbconnect.php";
	
	$uClass = $_POST['classID'];
	$uSID = $_SESSION['sID'];
	
	$sqlVer = "SELECT curEnroll AS cCount FROM tblclasses WHERE classID='$uClass'";
	$rVer = mysqli_query($connection,$sqlVer);
	$sqlRes = $rVer->fetch_object()->cCount;
	
	if ($sqlRes >= 15)
	{
		$sql="INSERT INTO tblwaitlist(studentID,classID) VALUES('$uSID','$uClass')";

		if(mysqli_query($connection, $sql))
		{
			echo "<h1>You are on the waiting list</h1>";
		}
		$connection->close();
		exit;	

	}
	else
		$sql = "INSERT INTO tblregisteredclasses(studentID,ClassID) 
		VALUES('$uSID','$uClass')";
	
		$sql1 = "SELECT className FROM tblclasses WHERE classID='$uClass'";
		$result = mysqli_query($connection,$sql1);
		$tblclasses = mysqli_fetch_assoc($result);
	
		$clName = $tblclasses['className'];
	
		
		if(mysqli_query($connection, $sql))
		{
			echo "<h1>You Have Successfully Signed up for: $uClass $clName  </h1>";
			echo '<a href="registration.php">Register for Another Class</a>';
			$connection->close();
		}
		else
		{
			echo "<h1>Registration has Failed. Please contact and administrator.</h1>"
			.mysqli_error($connection);
			$connection->close();
		}
	
?>
</div>

</body>
</html>