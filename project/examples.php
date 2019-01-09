<!DOCTYPE HTML>
<html>

<head>
  <title>colour_red - examples</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>
<script type="text/javascript">
 var s;
 var b;
 function sem(r){
  s=r.value;

 }
 function branch(q)
 {
  b=q.value;
 }
   
  function f() {
    
   if(b =='com') 
   {     
        if(s == '5')
        { 
    
         document.getElementById("11").href = "http://www.darshan.ac.in/Upload/DIET/Documents/CE/2150703_ADA_Study%20Material%20-%202016_27092016_084119AM.pdf";
          document.getElementById("22").href = "http://www.darshan.ac.in/Upload/DIET/Documents/CE/2150707-MPI-Study-Material_04112017_033410AM.pdf";
           document.getElementById("33").href = "http://www.darshan.ac.in/Upload/DIET/Documents/CE/Darshan%20-%20Sem5%20-%202150708%20-%20SP_25112015_054658AM.pdf";
            
            document.getElementById("44").href = "http://www.darshan.ac.in/Upload/DIET/Documents/CE/2160707_AJAVA_Material_17042018_033918AM.pdf";
            document.getElementById("55").href = "http://www.darshan.ac.in/Upload/DIET/Documents/CE/2160708_Web%20Technology%20Study%20Material%20GTU_23042016_032646AM.pdf";
             document.getElementById("11").innerHTML = "DAA";
              document.getElementById("22").innerHTML = "MPI";
               document.getElementById("33").innerHTML = "SP";
                document.getElementById("44").innerHTML = "AJP";
                 document.getElementById("55").innerHTML = "WAD";


        }
        else if(s=="6")
        {
          //document.getElementById("demo").innerHTML("error");
        }
   }
   else
   {

   }
    //document.getElementById("demo").innerHTML("error2");
  
    
  }
</script>
<body>
<?php
session_start();

if($_SESSION['username']==""){header("location:login.php");}



?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
         <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">STUDY<span class="logo_colour">STACK</span></a></h1>
          <h2>Site Which Bring Us Great Engineers</h2>
        </div>
          <div style="float: right;">
        <h3 style="color: white;">Welcome <?php echo $_SESSION["na"]; ?></h3>
      
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="examples.php">Materials</a></li>
          <li><a href="contact.php">Contact Us</a></li>
      <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <form>
       <h2>Select Your Branch:
       <select onclick="branch(this)">
          <option selected disabled>Branch</option>
          <option value="com" id="com">Computer</option>
          <option value="it" id="it">IT</option>
          <option value="mech" id="mech">Mechanical</option>
          <option value="civil" id="civil">Civil</option>
          <option value="ele" id="ele">Elecrical</option>
          <option value="ec" id="ec">Electronics</option>
       </select> 
       <h2>Select Your Semester:
       <select onclick="sem(this)">
        <option selected disabled>Semester</option>
        <option value="1" id="1">First</option>
        <option value="2" id="2">Second</option>
        <option value="3" id="3">Third</option>
        <option value="4" id="4">Fourth</option>
        <option value="5" id="5">Fifth</option>
        <option value="6" id="6">Sixth</option>
        <option value="7" id="7">Seventh</option>
        <option value="8" id="8">Eighth</option>
      </select><br><br><br>
    
      <input type="button" name="SUBMIT" value="Click To Generate" onclick="f()">
      <br><br>
      <a id="11" href="#"></a>
      <a id="22" href="#"></a>
      <a id="33" href="#"></a>
      <a id="44" href="#"></a>
      <a id="55" href="#"></a></h2>
    </form>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
       Copyright &copy; STUDY STACK
    </div>
  </div>
</body>
</html>
