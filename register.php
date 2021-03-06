<?php include('logics/server.php')?>

<!DOCTYPE html>
<html>
   <head>
      <title>Registration Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="style1.css">
	  
	  <style>
	  html {
    min-height: 100%;
}
 
body {
    background: -webkit-linear-gradient(left, #93B874, #C9DCB9); 
    background: -o-linear-gradient(right, #93B874, #C9DCB9); 
    background: -moz-linear-gradient(right, #93B874, #C9DCB9); 
    background: linear-gradient(to right, #93B874, #C9DCB9); 
    background-color: #93B874; 
}
  </style>
   </head>
   <body>
      <img src="images/banner.gif" style="width: 100%;" alt="banner"/>
      <marquee>Here is your 1 Stop Shop for Galway City</marquee>
      <div class="w3-bar w3-black" style="border-color: white; border-style: solid;">
      <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
      <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
      <a href="register.php" class="w3-bar-item w3-button w3-mobile">Register</a>
      <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
      <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
      <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
      <div class="header">
         <br>
         <h2>Register</h2>
      </div>
      <form method="post" action="register.php" style="border-color: white; border-style: solid;">
         <?php include('logics/errors.php'); ?>
         <div class="input-group">
		 <br>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
         </div>
         <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
         </div>
         <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
         </div>
         <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
         </div>
         <div class="input-group">
            <button align="right" type="submit" class="w3-button w3-yellow"  name="reg_user" id="btn">Register</button>
         </div>
         <p>
            Already a member? <a href="login.php">Sign in</a>
         </p>
		 
		       <p>
            Forgot Password? <a href="requestReset.php">Send Password</a>
         </p>
      </form>
	  
   </body>
</html>