<?php
   session_start();
    include "connect.php";
    if(isset($_POST['submit']))
    {
         $Fname=$_POST['Fname'];
         $address=$_POST['address'];
         $email=$_POST['email'];
         $Password=$_POST['Password'];
         $Password1=$_POST['Password1'];
        
  if(empty($email)){
     echo "email is require";
  }
  else{
  $emailquery="SELECT * from adminTable where email='$email'";
  $querys=mysqli_query($conn,$emailquery);
  $emailcount=mysqli_num_rows($querys);
      if($emailcount>0)
      {
        echo '<span style="color:red">'."Email already exists".'</span>';
      }
      else{
         if($Password==$Password1)
         {
            $Password=md5($Password);
    $sql="INSERT INTO
     adminTable(fname,address,email,Password) values('$Fname','$address','$email','$Password')";
         if(mysqli_query($conn,$sql))
              {      
                 header("location:login.php");
                 }
                 else
                 {
                     echo "Error" .$sql."<br>".$conn->error;
                 }
         }
         else{
            echo '<span style="color:red">'."Password doesn't match".'</span>';
         }
        }
    }
}
?>