<?php
session_start();
include "connect.php";
if(isset($_POST['submit']))
{
	 $email=$_POST['email'];
	 $Password=$_POST['Password'];
	 $Password=md5($Password);
	  $query="SELECT * FROM adminTable where email='$email' and Password='$Password'";
	   $result=mysqli_query($conn,$query);
	    if($row=mysqli_fetch_assoc($result))
	    {
	    	  if($row['email']==$email && $row['Password']==$Password)
	    	  {
	    	  	   echo "<h4>Successfull</h4>";
	    	  	   header("location:Dashboard.php");
	    	  }
	    	  $_SESSION['Email']=$email;
	    	  $_SESSION['password']=$Password;
	    }
	    else
	    {
	    	 echo "<h4>invalid</h4>";
	    }

} 
  ?>

  <!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
		<style type="text/css">
		h4{
			 padding: 20px 130px;
		}
	</style>
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
					<h4 class="mb-4">Sign In</h4>
	<form action="" method="POST"  >						
					<input type="email" name="email" id="san3" class="form-control mb-3" placeholder="Enter your email">
					<input type="Password" name="Password" id="san5" class="form-control mb-3" placeholder="Password">
			        <input type="submit" name="submit" id="sand" class="btn btn-success">
		
	</form>
			</div>
			</div>
		</div>
</body>
</html>
