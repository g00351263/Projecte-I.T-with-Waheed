<html>
    <head>
        <title>Registration Page</title>

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
                <div id="div_login">
                    <h1>Register</h1>
					<div>
                        <label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Name" />
                    </div>
					<br>
                    <div>
                        <label>User Name:</label><input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
					<br>
                    <div>
                        <label>Password &nbsp :</label><input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Register" name="but_submit" id="but_submit" />
                    </div>
            </form>
        </div>
    </body>
</html>

