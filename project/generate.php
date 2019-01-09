<?php
session_start();
 
 $con = mysqli_connect('localhost','root');
 if($con){
 	echo "conection successfull";
 } else{
 	echo "no connection";
 }
 mysqli_select_db($con, 'data');
 $name =$_POST['user'];

 $email =$_POST['Email'];
 $q= "select * from login where username='$name' and email_id='$email' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1)
{   
    function createRandomPassword() {
    $chars = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
    $i = 0;
    $pass = '' ;

    while ($i <= 8) {
        $num = mt_rand(0,61);
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
    }
   $pw =createRandomPassword();
   
echo $pw;
$msg=$_POST['user'];
$password="Thank You For Generating. Your new Password: " .$pw;

   $headers = "From: dancedrug1462@gmail.com" . "\r\n";
   mail($email, $msg,$password,$headers);
	$qy="update login set password='$pw' where username='$name' and email_id='$email'";
	mysqli_query($con,$qy);
	 $Message = "Password is send to given Email-id ";
     header("Location:login.php?Message={$Message}");
}
	
else{
	  $Message = "Username and Email-id do not Exist ";
      header("Location:login.php?Message={$Message}");
}
?>