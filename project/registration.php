<?php
session_start();

 


    

 $con = mysqli_connect('localhost','root');
 
 mysqli_select_db($con, 'data');
 $name =$_POST['user'];
 $pass =$_POST['password'];
 $q= "select * from login where username='$name' && password='$pass' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
echo $num;
if($num == 1)
{   
	$_SESSION["username"]=$name;
    while ($row=mysqli_fetch_assoc($result)) {
    	$_SESSION["na"]=$row["name"];
    }
	header('location:index.php');
}
else
{
	$Message = "Username or Password is Incorrect  ";
    header("Location:login.php?Message={$Message}");
}

?>