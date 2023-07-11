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

	<div class="container text-center">
	<hl>Welcome to the Profile Page</hl>
	</div>

<?php
if(empty($_SESSION['username']))
{
	header("location: index.php"); 
	exit;
}

<style>
	table{
	border: 1px solid black;
	width: 900px;}
	thead{
	background-color: aqua;}
	th{
	border: 1px solid black;
	text-align: center;}
	td{
	border: 1px solid black;
	text-align: center;}
</style>
	
	<table align='center'>
		<thead>
			<tr>
				<th> Email </th>
				<th> Password </th>
				<th> First Name </th>
				<th> Last Name </th>
				<th> Address </th>
				<th> Phone </th>
				<th> Salary </th>
				<th> SSN </th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	


<?php include 'footer.php';?>
</body>
</html>