<?php
//error_reporting(E_ALL ^ E_NOTICE)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Registration Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<style type="text/css">
   .registration
   {
      background: #f7f7f7;
      padding: 20px;
      border: 1px solid blue;
      margin: 50px 0px;
    }
    .err-msg
	{
      color:red;
    }
    .registration form
	{
      border: 1px solid #e8e8e8;
      padding: 10px;
      background: #f3f3f3;
    }
  </style>
</head>
<body>
<?php require 'master.php';?>

<div class="container-fluid">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
	<div class="registration">
		<h4 class="text-center">Welcome to the Registration Page</h4>
		
	<p class ="text-success text-center"></p>
	<form method="post" action="sqlupdate.php">
	
		<div class="form-group">
           <label>Email:</label>   
			<input type="text" class="form-control" placeholder="Enter Email" name='email'>
        </div>
		
		<div class="form-group">
           <label>First Name:</label>   
<input type="text" class="form-control" placeholder="Enter First Name" name='first_name'>
        </div>
		
		<div class="form-group">
           <label>Last Name:</label>   
<input type="text" class="form-control" placeholder="Enter Last Name" name='last_name'>
        </div>
		
		<div class="form-group">
           <label>Address:</label>   
<input type="text" class="form-control" placeholder="Enter Address" name='address'>
        </div>
		
		<div class="form-group">
           <label>Phone Number:</label>   
<input type="text" class="form-control" placeholder="Enter Phone Number" name='phone_number'>
        </div>
		
		<div class="form-group">
           <label>Password:</label>   
<input type="text" class="form-control" placeholder="Password" name='password'>
        </div>
		
		<button type="submit" class="btn btn-danger" name="submit">Register Now</button>
	</form>
	</div>
	</div>

<?php include 'footer.php';?>
</body>
</html>