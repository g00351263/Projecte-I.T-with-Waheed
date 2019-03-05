<?php include('logics/server.php') ?>
    <html>

    <head>
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <style>

    </style>

    <body>

        <img src="images/banner.gif" id="banner" alt="banner" />
        <marquee id="bannerAd">Upload the Advertisement for Free and Sell your Stuff</marquee>

        <div class="w3-bar w3-black" style="border-color: white; border-style: solid;">
            <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
            <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
            <a href="register.php" class="w3-bar-item w3-button w3-mobile">Register</a>
            <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
            <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
            <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
           
		   <div class="header">
                <br>
                <h2>Login</h2>
            </div>
            
			<form method="post" action="login.php" style="border-color: white; border-style: solid;">
                <?php include('logics/errors.php'); ?>
                    <div class="input-group">
                        <br>
                        <label style="align:left;">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="input-group">
                        <label style="align:left;">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="input-group">
                        <button class="w3-button w3-yellow" type="submit" name="login_user" id="btn">Login</button>
                    </div>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
            </form>
    
	</body>
    </html>