<?php include('logics/server.php')?>
<?php echo "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=1234";
?>
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
	  </div>
      <div class="second">
<?php

$con = mysqli_connect("localhost","root","","registration");

if(mysqli_connect_error()){
	echo "Failed to connect" . mysqli_connect_errno();
}

if(!isset($_GET["code"])){
	exit("Cant find page");
}

$code = $_GET["code"];

$getEmailQuery= mysqli_query($con, "SELECT email FROM resetPasswords WHERE code ='$code'");

if(mysqli_num_rows($getEmailQuery) == 0){
	exit("Cant find page");
}

if(isset($_POST["password"])){
	$pw = $_POST["password"];
	$pw = md5($pw);
	
	$row = mysqli_fetch_array($getEmailQuery);
	$email = $row["email"];
	
	$query = mysqli_query($con, "UPDATE users set password='$pw' WHERE email ='$email'");
	
	if($query) {
		$query = mysqli_query($con, "DELETE FROM resetPassword WHERE code = '$code'");
		exit("Password Updated");
	}
	else{
		exit("Something went wrong");
	}
}
?>

<form method="POST">
<input type="password" name="password" placeholder="New password">
<br>
<input type="submit" name="submit" placeholder="Update password">

</form>
	  </div>
   </body>
</html>