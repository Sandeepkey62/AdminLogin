<?php
 session_start();
 include "connect.php";
 if(isset($_GET['id']))
 {
 	  $id=$_GET['id'];
 	    $query = "DELETE FROM adminTable WHERE id = '".$_GET["id"]."'";
 	    if(mysqli_query($conn,$query))
 	    {
 	    	 header("location:displaydata.php");
 	    }
 	    else
 	    {
 	    	 echo "Not deleted";
 	    	 echo "Error: " . $query . "<br>" . $conn->error;
 	    	  ini_set('display_errors', 1);
 	    }

 }


?>