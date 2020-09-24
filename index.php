<?php
require "AdminData.php";
?>
<!DOCTYPE html>	
<html>
<head>
	<title>Create Account</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>
<body id="back">
	<div class="container" >
		<div class="row d-flex justify-content-center mb-3">
		<div class="col-md-5 mb-4">
		<h4 class="mb-4" >Create Account</h4>
	<form action="" method="POST">						
	<input type="text" name="Fname" id="san0" class="form-control mb-3 " placeholder="Enter your first name" required>
	 <span id="sp">
    </span>
	<input type="text" name="address" id="san2" class="form-control mb-3" placeholder="Enter your address">
	<input type="email" name="email" id="san3" class="form-control mb-3" placeholder="Enter your email">
	<input type="Password" name="Password" id="san5" class="form-control mb-3" placeholder="Password">
	<span id="pa1" class="mb-2">
	</span>
	<input type="Password" name="Password1" id="san6" class="form-control mb-3" placeholder=" Confirm-Password" required>
	<span id="pa" class="mb-2"></span>
		<br>
		 <input type="submit" name="submit" id="sand" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  Have an account?
		 <a href="login.php">Log In</a>
	</form>
			</div>
			</div>
		</div>
</body>
</html>
	
		 	