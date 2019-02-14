<?php include('server.php') ?>

<html>
    <head>
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<img src="banner.gif" id="banner" alt="banner"/>
<marquee>Here is your 1 Stop Shop for Galway City</marquee>

<div class="w3-bar w3-black">
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="buy.php" class="w3-bar-item w3-button w3-mobile">Buy</a>
  <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
  <a href="signup.php" class="w3-bar-item w3-button w3-mobile">Sign Up</a>
  <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
  <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
  <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
</div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
      
    </body>
</html>

