<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fill in the form below to sell your stuff</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="style1.css">
	  <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <img src="banner.gif" id="banner" alt="banner"/>
      <marquee>Here is your 1 Stop Shop for Galway City</marquee>
     <div class="w3-bar w3-black" style="border-color: black; border-style: solid;">
		  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
		  <a href="buy.php" class="w3-bar-item w3-button w3-mobile">Buy</a>
		  <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
		  <a href="signup.php" class="w3-bar-item w3-button w3-mobile">Register</a>
		  <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
		  <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
		  <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
	  </div>
<!-- <div class="header" style="background-color: black; border-style: solid;"> -->
	
<!--	<h6 style="text-align:center ; color:red;">Sell Page</h6>	-->
	<img src="Banner-Sell-1400x302.jpg" alt="Banners" style="width:1500px;height:300px;">

		
		<div class="w3-bar w3-black" style="border-color: black; border-style: solid;">
					<a href="Motors.php" class="w3-bar-item w3-button w3-mobile">Motors</a>
					<a href="Elctronics.php" class="w3-bar-item w3-button w3-mobile">Elctronics</a>
					<a href="Boats.php" class="w3-bar-item w3-button w3-mobile">Boats</a>
					<a href="Cloths.php" class="w3-bar-item w3-button w3-mobile">Cloths</a>
					<a href="Shoes.php" class="w3-bar-item w3-button w3-mobile">Shoes</a>
					<a href="Accesories.php" class="w3-bar-item w3-button w3-mobile">Accesories Us</a>
					<a href="Plants.php" class="w3-bar-item w3-button w3-mobile">Plants Us</a>
		</div>
		
		 <marquee>Here is your 1 Stop Shop for Galway City</marquee>
		<div class="header" style="background-color: black; border-style: solid;"> </div>
		<p style="text-align:right ; color: red;";> <a href="index.php?logout='1'">logout</a> </p>
</body>
</html>