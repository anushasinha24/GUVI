<?php
	session_start();
	$_SESSION['error']=0;
?>

<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="images/logo.png" type="image/x-icon" />
	<title>GUVI | Home</title>
	<link rel="shortcut icon" href="images/logo.ico">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
	<link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
	
  </head>

  <body class="size-1280">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <?php
		if(!(isset($_SESSION['id'])))
		{
	  ?>
	  <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
          <div class="logo hide-l hide-xl hide-xxl">
             <a href="http://www.guvi.in/" class="logo">
              <img class="logo-white" src="images/logo.png" alt="GUVI-logo">
			  <img class="logo-dark" src="images/logo.png" alt="GUVI-logo">
            </a>
          </div>                  
          <p class="nav-text"></p>
          
          <!-- left menu items -->
           <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
				<li><a href="index.php" style="font-size: 140%; color: black">Home</a></li>
				<li><a href="login.php" style="font-size: 140%; color: black">Login</a></li>
             </ul>
          </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="http://www.guvi.in/" class="logo" title="GUVI">
              <img class="logo-white" src="images/logo.png" alt="GUVI-logo">
			  <img class="logo-dark" src="images/logo.png" alt="GUVI-logo">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
				<li><a href="register.php" style="font-size: 140%; color: black">Register</a></li>
				<li><a href="queries.php" style="font-size: 140%; color: black">Queries</a></li>
             </ul>  
          </div>
        </div>
      </nav>
	  <?php
	  }
	  else
	  {
	  ?>
	  <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
          <div class="logo hide-l hide-xl hide-xxl">
             <a href="http://www.guvi.in/" class="logo" title="GUVI">
              <img class="logo-white" src="images/logo.png" alt="GUVI-logo">
			  <img class="logo-dark" src="images/logo.png" alt="GUVI-logo">
            </a>
          </div>                  
          <p class="nav-text"></p>
          
          <!-- left menu items -->
           <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
                <li><a href="index.php" style="font-size: 140%; color: black">Home</a></li>
				<li><a href="dashboard.php" style="font-size: 140%; color: black">Dashboard</a></li>
				<li><a href="update.php" style="font-size: 140%; color: black">Update</a></li>
             </ul>
          </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="http://www.guvi.in/" class="logo" title="GUVI">
              <img class="logo-white" src="images/logo.png" alt="GUVI-logo">
			  <img class="logo-dark" src="images/logo.png" alt="GUVI-logo">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
				<li><a href="queries.php" style="font-size: 140%; color: black">Queries</a></li>
				<li><a href="password.php" style="font-size: 140%; color: black">Change Password</a></li>
				<li><a href="logout.php" style="font-size: 140%; color: black">Logout</a></li>
             </ul> 
          </div>
        </div>
      </nav>
	  <?php
	  }
	  ?>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Header -->
      <header class="section-top-padding background-image text-center" style="background-image:url(images/index.jpg);">
        <div class=" margin-bottom-80 margin-top-100" style=" background-color: rgba(0, 0, 0, 0.7); margin-right: 5%; margin-left: 5%">
			<br>
			<h1 class="text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1" style="font-weight: bold; padding-top: 3%">About GUVI</h1><br><br>
			<p style="font-size: 130%; color: white;">Guvi, an IIT Madras-incubated company,is an online technical learning platform, which is making engineers employable by <br>making difference in the way they are learning. Guvi offers technical video courses like Android, Python, Java, C, C++, Big Data, <br>Machine Learning, MongoDB in vernacular languages which are created byworking professionals in native languages like <br>Tamil, Telugu, Hindi, Kannada, Bengali etc.</p><br><br><br><br>
			<i>Visit our </i><a id="official" style="font-size: 120%; font-weight: bold;" href="https://www.guvi.in/">OFFICIAL WEBSITE</a><i> to find out more about us</i><br><br><br>
			<br><br>
		</div>
		</div>
		<div>
		<br><br><br><br><br><br><br>
		</div>
      </header>
	  <section class="section-top-padding text-center margin-bottom-80" style="margin-right: 15%; margin-left: 15%;">
			<h1 class="text-extra-thin text-s-size-30 text-m-size-40 text-size-40 text-line-height-1" style="font-weight: bold; padding-top: 3%">Why This?</h1><br><br>
			<h3 class="text-s-size-25 text-m-size-30 text-size-30 text-line-height-1">Our Mission</h3><br>
			<p style="font-size: 120%; color: #808080">Our mission is to make technical education available to all in their native languages.</p><br><br><br>
			<h3 class="text-s-size-25 text-m-size-30 text-size-30 text-line-height-1">Our Story</h3><br>
			<p style="font-size: 120%; color: #808080">GUVI has been started as Youtube Channel by Ex-Paypalians to share their technical learnings.Those videos have<br> been watched by 1 Million people across the globe which motivated founders to  start this as a company.Now, we <br>are changing the way the world learns and bridging the gap between Industry and Academicia.</p><br><br>
	  </section>
    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Social -->
	  <div class="section-small-padding background-dark text-center">
		<b style="font-size: 125%; color: white;">Connect with us on:<b><br>
	  </div>
      <div class="background-primary padding text-center">
        <a href="https://www.facebook.com/guvigeek/"><i class="icon-facebook_circle text-size-40"></i></a> &nbsp; 
        <a href="https://twitter.com/GuviGeek"><i class="icon-twitter_circle text-size-40"></i></a> &nbsp;
       <a href="https://www.instagram.com/guvigeek/?hl=en"><i class="icon-instagram_circle text-size-40"></i></a>                                                                     
      </div>
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
            <div class="s-12 m-6 l-4 xl-4">
               <h2 class="text-white text-strong">Branches</h2>
               <p>
					<b class="text-size-20">Chennai, TN: </b><br><i class="text-size-20"><span class="text-white">MAIN BRANCH </span><br>IITM Research Park - Phase 2 , <br>Module #7C , 3rd Floor, D Block, <br>Kanagam Road, Tharamani, <br>Chennai, Tamil Nadu - 600113</i> <br><br>
				</p>
            </div>
            <div class="s-12 m-6 l-4 xl-4">
               <h2 class="text-white text-strong margin-m-top-30">Support</h2>
               <a class="text-primary-hover" href="https://www.guvi.in/terms-of-service.html">Terms and Conditions</a><br>      
               <a class="text-primary-hover" href="https://www.guvi.in/jobs.html">Jobs</a><br>
			   <a class="text-primary-hover" href="https://www.guvi.in/team.html">Team</a><br>
			   <a class="text-primary-hover" href="queries.php">Submit Queries</a><br>
               <a class="text-primary-hover" href="https://www.guvi.in/career.html">Careers</a><br><br>
			   <!--<h4 class="text-white text-strong margin-m-top-30">Term of Use</h4>
               <a class="text-primary-hover" href="page.html">Terms and Conditions</a><br>
               <a class="text-primary-hover" href="page.html">Refund Policy</a><br>
               <a class="text-primary-hover" href="page.html">Disclaimer</a>-->
            </div>
            <div class="s-12 m-6 l-4 xl-4">
               
			   <h2 class="text-white text-strong margin-m-top-30">Contact Us</h2>
                <b><i class="text-white">GUVI</i><br>
				<i class="icon-sli-screen-smartphone text-primary"></i> +91 - 44 - 6646 9865</b><br>
				<b><i class="text-white">Arunprakash</i><br>
				<i class="icon-sli-screen-smartphone text-primary"></i> +91 - 9176054456</b><br>
                <a class="text-primary-hover" href="mailto:arunprakash@guvi.in"><i class="icon-sli-mouse text-primary"></i> arunprakash@guvi.in</a><br>
				<b><i class="text-white">Balamurugan</i><br>
				<i class="icon-sli-screen-smartphone text-primary"></i> +91 - 9840224594</b><br>
                <a class="text-primary-hover" href="mailto:spbalamurugan@guvi.in"><i class="icon-sli-mouse text-primary"></i> spbalamurugan@guvi.in</a><br>
				
            </div>
          </div>  
        </div>    
      </section>
      <div class="background-dark">
         <div class="line">
            <hr class="break margin-top-bottom-0" style="border-color: #777;">
         </div>
      </div>
      <!-- Bottom Footer -->
      <section class="padding-2x background-dark full-width">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-14">GUVI</p>
            <p class="text-size-14">IITM Research Park</p>
          </div>
          <div class="s-12 l-6">
            <b class="right text-size-13">Developed by <a class="text-primary-hover" href="https://www.anushasinha.cf" title="Anusha Sinha">Anusha Sinha</a></b><br>
			<b class="right text-size-13">Copyright &copy; GUVI</a></b>
          </div>
        </div>  
      </section>
    </footer>
	
	<script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>