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

<?php
//returns to landing page if user not logged in

	require_once "dbconnect.php";
	
	$uClass = $_POST['classID'];
	$cID = $_SESSION['sID'];
	
	$sql = "DELETE FROM tblregisteredclasses WHERE classID = '$uClass' AND studentID = '$cID'";
	
	if($connection->query($sql) === TRUE)
	{
		echo "Record Deleted";
		echo $uClass;
	}
	else
	{
		echo "NO GO";
		echo $uClass;
	}
	
	
	header("location: index.php");
	$connection->close();
	exit;

?>
</body>
