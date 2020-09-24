<?php
  session_start();
  include "connect.php";
  if(empty($_SESSION['Email']))
  {
  	 header("location:login.php");
  }
   $mail=$_SESSION['Email'];
      $pass=$_SESSION['password'];

  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Display Data</title>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" type="text/css" href="/css/index.css">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8 mb-3">
  				  	<h2>User's Details </h2>
  			</div>
  		</div>
  	</div>
  <table class="table table-bordered mb-3">
  		<thead>
  			<tr>
  				<th>ID</th>
  				<th> First Name</th>
  				<th>Address</th>
  				<th>Email</th>
  				<th>Action</th>
  			</tr>
  				</thead>

  				<?php
                  $query="SELECT * From adminTable where email='$mail' and Password='$pass'";
                  $result=mysqli_query($conn,$query);

  				?>
  			<tbody>
  				<tr>
  					<?php
  					  while($rows=mysqli_fetch_assoc($result))
  					  {
 					  ?>
  				  <td><?php echo $rows['id'] ;?></td>	
  				  <td><?php echo $rows['Fname'] ;?></td>
  				  <td><?php echo $rows['address'] ;?></td>
  				  <td><?php echo $rows['email'] ;?></td>
  				  <td>
  				  	<button type="button"  class="btn btn-success"><a  style="color: white;" href="edit.php?id=<?php echo $rows['id'];?>">Edit </a> </button>
  				  	<button type="button"  class="btn btn-primary">
  				  		<a  style="color: white;" href="delete.php?id=<?php echo $rows['id'];?>">Delete</a></button>

  				  </td>
  				</tr>
  				<?php
  			}
 ?>
  			</tbody>
  </table>
  <p id="wrng">*If we are updating email then first logout here</p>
      <a href="logout.php" class="card-link">Log Out</a>

  </body>
  </html>