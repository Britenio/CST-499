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
if(empty($_SESSION['username']))
{
	header("location: index.php"); 
	exit;
}
?>
	<?php
	//form to select semester to view classes
	?>
	<div class="container text-left">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<P>Please Select the Semester you wish to choose classes from: 
				<select name="Semester">
					<option value="Please Select a Semester">Please Select a Semester</option>
					<option value="FAL23">Fall</option>
					<option value="WIN23">Winter</option>
					<option value="SPR24">Spring</option>
				</select>
				<button type="submit">Select</button>
			</p>
		</form>
		
<?php 
	//connect to database and pull information for selected semester and create table
	if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			require_once "dbconnect.php";
			$sem = $_POST['Semester'];
			$nameArray = array();
			$idArray = array();
			$sql = "SELECT className, classID FROM tblclasses WHERE semester='$sem'";
			$result = $connection->query($sql);
			
			
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
?>
	</div>

<style>
	table{border: 1px solid black;width: 900px;}
	th{background-color: aqua;}
	th{border: 1px solid black;text-align: center;}
	td{border: 1px solid black;align:center;}
</style>
	<div class="container text-left">
		<form action="waitlist.php" method="post">
			ClassID: <input type="text" name="classID"><br>
			<input type="submit">
		</form>


	


<?php include 'footer.php';?>
</body>
</html>