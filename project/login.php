<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" type="text/css" href="style/style1.css" title="style" />

</head>
<body >

<div class="bg">



<?php

if( !empty( $_REQUEST['Message'] ) )
{
    echo sprintf( '<tr><td><p><h3>%s<h3></p></td></tr>', $_REQUEST['Message'] );
}
?>
<div style='float:right;'>
    <center>
  
  <button class="button button4" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><h2>Login</button>
    <button class="button button4" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><h2>Create New Account</button></center>
  </div>

<div id="id01" class="modal">
  <form class="modal-content animate" action="registration.php" method="post"">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close animate" title="Close Modal">&times;</span>
      <img src="login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      
<input type="button" value="Forget Password?" onclick="document.getElementById('id03').style.display='block';document.getElementById('id01').style.display='none';" style="width:auto;">    
    </div>  
  
  </form>
  
  </div>
 
<div id="id02" class="modal1">
  
  <form class="modal-content animate" action="store.php" method="post"">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close animate" title="Close Modal">&times;</span>
      <img src="create.png" alt="Avatar" class="avatar" width="170px">
    </div>

    <div class="container">
           <label for='name' >Your Full Name*: </label>
           <input type='text' placeholder="Full Name" name='name' id='name' required />

           <label for='email' >Email Address*:</label>
           <input type='email' placeholder="xyz@example.com" name='email' id='email' required />
           <label for='username' >UserName*:</label>
           <input type='text' placeholder="UserName" name='username' id='username' required />
           <label for='password' >Password*:</label>
           <input type="password" id="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
<div id="message">
  <h4>Password must contain the following:</h4>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
       <button type="submit">Submit</button>
</div>
</form>

</div>
 <div id="id03" style="display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;">
  <form class="modal-content animate" action="generate.php" method="post"">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close animate" title="Close Modal">&times;</span>
      <img src="d1.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label for="psw"><b>Email Id</b></label>
      <input type="text" placeholder="Enter Email Id" name="Email" required>
        
      <button type="submit">Generate</button>
    </div>
  
  </form>
</div>
</div>
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
 </body>
</html>