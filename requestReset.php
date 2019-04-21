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
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\HPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$con = mysqli_connect("localhost","root","","registration");

if(mysqli_connect_error()){
	echo "Failed to connect" . mysqli_connect_errno();
}

if(isset($_POST["email"])){
	
	$emailTo = $_POST["email"];
	
	$code = uniqid(true);
	$query = mysqli_query($con, "INSERT INTO resetPasswords(code,email) VALUES('$code','$emailTo')");
		if(!$query){
		exit("Error");
	}
	
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                                      // Enable verbose debug output
    $mail->isSMTP();                                           
	// Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'galwaybuysell@gmail.com';                     // SMTP username
    $mail->Password   = 'gmit2019$';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('galwaybuysell@gmail.com', 'Mailer');
	
	//rec email//
    $mail->addAddress("$emailTo");     // Add a 
    
	$mail->addReplyTo('no-reply@example.com', 'Information');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
	$url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your password reset link';
    $mail->Body    = "<h1>You requested a password reset copy paste following url</h1> 
			 <a href='$url'>$url</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'reset password has been sent to your email';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
exit();
}


?>
<form method="POST">
	<input type="text" name="email" placeholder="Email" autocomplete="off"/>
	<br>
	<input type="submit" name="submit" value="Reset Email">

</form>
	  </div>
   </body>
</html>