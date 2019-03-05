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
	<title>Sell Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="style1.css">
	  <link rel="stylesheet" href="style.css">
   </head>

<body>
      <img src="banner.gif" id="banner" alt="banner"/>
      
	  <marquee>Here is your 1 Stop Shop for Galway City</marquee>
      
<div class="w3-bar w3-black" style="border-color: white; border-style: solid;">
	  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
      <a href="buy.php" class="w3-bar-item w3-button w3-mobile">Buy</a>
      <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
      <a href="signup.php" class="w3-bar-item w3-button w3-mobile">Register</a>
      <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
      <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
      <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>

<div class="header">
<br>
	<h2>Fill in the form below to sell your stuff</h2>
</div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	&nbsp &nbsp Welcome <font size="10" color="blue"><?php echo $_SESSION['username']; ?></font>&nbsp &nbsp &nbsp
    	<a href="index.php?logout='1'" style="color: red;">Logout</a>
    <?php endif ?>
</div>

<form method="post" action="login.php" style="border-color: white; border-style: solid;" >
         
		 <br>

		 <div class="input-group">
            <label>Select Category :</label>
            <select name="category">
				<option value="electronics">Electronics</option>
				<option value="motor">Motors</option>
				<option value="clothing">Clothing</option>
				<option value="property">Property</option>
			</select >
         </div>
		 <br>
		  <div class="input-group">
            <label>Confirm Id&nbsp &nbsp &nbsp &nbsp &nbsp(case Sensitive):</label>
			<input type="text" name="username" >
         </div>
		 <br>
         <div class="input-group">
            <label>Item Description:</label>
			<input type="text" name="description" >
         </div>
         <div class="input-group">
            <label>Contact Details:</label>
			<input type="text" name=user1>
         </div>

		 
		 
		     <br />  
                    <input type="file" name="image" id="image"  />  
                    <br />  

        
		 
		 
		 
		 
		 <br>
         <div class="input-group" >
            <button align="right" type="submit" class="w3-button w3-yellow"  style="margin-left: 10px; margin-bottom: 10px; " name="insert" id="insert">Submit Advertisement</button>
         </div>
</form>
</body>
</html>