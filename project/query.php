<?php
session_start();
 if(isset($_POST['contact_submitted']))
 {
  $to ='dancedrug1462@gmailcom';
  $subject ='Feedback';
   $message ='Name'.$_POST['your_name']."\r\n\r\n"; 
  $message ='Email'.$_POST['your_email']."\r\n\r\n";
  $message ='Comment'.$_POST['your_enquiry']."\r\n\r\n";
  mail($to, $subject,$message);
  
}
   

?>