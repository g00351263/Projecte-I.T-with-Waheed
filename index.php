<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
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
        <div class="container">
            <form method="post" action="">
      
                    <h1>Login</h1>
                    <div>
                        <label>User Name:</label><input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
					<br>
                    <div>
                        <label>Password &nbsp :</label><input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
            </form>
        </div>
    </body>
</html>

