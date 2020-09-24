<?php
 session_start();
 include "connect.php";
 if(isset($_POST['submit']))
 {
     $id=$_GET['id'];
 	$Fname=$_POST['Fname'];
     $address=$_POST['address'];
     $email=$_POST['email'];
  $query = "UPDATE adminTable set id =$id, Fname='$Fname',address='$address', email='$email' where id=$id ";
 if(mysqli_query($conn, $query))
 {
  echo 'update';
   header("location:displaydata.php");
 }
 else
 {
  echo "Error: " . $sql . "<br>" . $conn->error;
  ini_set('display_errors', 1);
 }

 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	  		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<form  action="" method="POST">
		<h2>Update profile here</h2>
		<div class="container">
<table class="table table-bordered">
	<tr>
		<th>First Name</th>
  	 	<th>Address</th>
  	 	<th>Email</th>
	</tr>
	<tr>
		<div class="form-group">
			<div class="row">
			<div class="col-md-3">
		<td><input type="text" name="Fname" class="form-control"></td>
		</div>
		<div class="col-md-3">
				</div>
		<td><input type="text" name="address" class="form-control"></td>
		<td><input type="text" name="email" class="form-control"></td>
	</div>
	</div>
	</tr>
</table>
</div>
<button type="button" onclick="window.location.href='Dashboard.php'" class="btn btn-info">Back</button>
	<input type="submit" name="submit" value="Submit" class="btn btn-success">


</form>
</body>
</html>