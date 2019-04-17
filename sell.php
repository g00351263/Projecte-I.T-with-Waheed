<?php 
   session_start(); 
     $user = $_SESSION['username'];

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
	<title>Sell Page</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
	<link href="style1.css" rel="stylesheet">
	<link href="mystyle.css" rel="stylesheet" type="text/css">
	<style>
	 
	  
	        #banner{
	        width:100%;
	        }
	        #wrapper{
	   width: 1066.95px; 
	   margin: auto; 
	   background-color: gold; 
	   overflow: hidden; 
	   border: 2px solid darkcyan;
	   }
	</style>
</head>
<body>
	<img alt="banner" src="images/banner.gif" style="width: 100%;"> <marquee>Here is your 1 Stop Shop for Galway City</marquee>
	<div class="w3-bar w3-black" style="border-color: white; border-style: solid;">
		<a class="w3-bar-item w3-button w3-mobile" href="index.php">Home</a> 
		<a class="w3-bar-item w3-button w3-mobile" href="sell.php">Sell</a>
		<a class="w3-bar-item w3-button w3-mobile" href="register.php">Register</a> 
		<a class="w3-bar-item w3-button w3-mobile" href="login.php">Log In</a> 
		<a class="w3-bar-item w3-button w3-mobile" href="about.php">About Us</a>
		<a class="w3-bar-item w3-button w3-mobile" href="contactus.php">Contact Us</a>
		<div class="content">
			<!-- notification message -->
			<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3><?php 
				                  echo $_SESSION['success']; 
				                  unset($_SESSION['success']);
				                   ?></h3>
			</div><?php endif ?><!-- logged in user information -->
			<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <?php echo $_SESSION['username']; ?> </p>
			<p><a href="index.php?logout='1'" style="color: red;">logout</a></p><?php endif ?>
		</div>
		<div class="header">
			<br>
			<h2>Fill in the form below to sell your stuff</h2>
		</div>
		<form enctype="multipart/form-data" method="post">
			<table>
				<tr>
					<td>Select Category :</td>
					<td><select name="category">
						<option value="electronics">
							Electronics
						</option>
						<option value="motor">
							Motors
						</option>
						<option value="clothings">
							Clothings
						</option>
						<option value="property">
							Property
						</option>
					</select></td>
				</tr>
				<tr>
					<td>Confirm Id:</td>
					<td><input name="username" type="text"></td>
				</tr>
				<tr>
					<td>Item Description:</td>
					<td><input name="description" type="text"></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input name="price" type="text"></td>
				</tr>
				<tr>
					<td>Contact Details:</td>
					<td><input name="contact" type="text"></td>
				</tr>
			</table><input name="image" type="file"> <input name="submit" type="submit" value="Upload"><br>
		</form><br>
		<br>
		<p>Following are the Advertisement Online By You</p><br>
		<div class="menu">
			<?php include 'pagesSeller.php';?>
		</div>
	</div>
</body>
</html>