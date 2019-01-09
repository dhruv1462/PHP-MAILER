<?php
 
 $con = mysqli_connect('localhost','root');
 mysqli_select_db($con, 'data');
 $name =$_POST['name'];
 $email =$_POST['email'];
 $user=$_POST['username'];
 $password=$_POST['password'];
 $q= "select * from login where username='$user' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1)
{  
    $Message = "This username is already exist ";
    header("Location:signin123.php?Message={$Message}");
    	
}
else{
	$qy="insert into login(username,email_id,password,name) values('$user','$email','$password','$name')";
	mysqli_query($con,$qy);
	$Message = "Sign In Successful ";
    header("Location:login.php?Message={$Message}");
	
}
?>