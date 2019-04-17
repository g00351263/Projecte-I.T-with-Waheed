<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\HPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if(isset($_POST["email"])){
	
	$emailTo = $_POST["email"];
	
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                                      // Enable verbose debug output
    $mail->isSMTP();                                           
	// Set mailer to use SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'galwaybuyandsell@yahoo.com';                     // SMTP username
    $mail->Password   = 'galwaybuyandsellgmit2019';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('galwaybuyandsell@yahoo.com', 'Mailer');
	
	//rec email//
    $mail->addAddress("$emailTo");     // Add a 
    
	$mail->addReplyTo('no-reply@example.com', 'Information');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}


?>
<form method="POST">
	<input type="text" name="email" placeholder="Email" autocomplete="off"/>
	<br>
	<input type="submit" name="submit" value="Reset Email">

</form>