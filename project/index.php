<?php
session_start();

if($_SESSION['username']==""){header("location:login.php");}

?>


<html>

<head>
  <title>homepage</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          
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
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="examples.php">Materials</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
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
        <!-- insert the page content here -->
         <h3><p>We provide study materials (books and lecture slides) that will be helpful for Engineering students. All the files you find on here will be in PDF (Portable Document Format). Study material found on this site will help engineering students during his/her courses study of engineering.</p>
         <p>Every subect course from First Sem to Last Sem of all the Branches are available you can choose your Branch and Sem according to GTU and University syllabus we will Provide You materials. </p>
         <a href="examples.php" >CLICK HERE FOR THE MATERIALS</a>

      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; STUDY STACK
    </div>
  </div>
</body>
</html>
