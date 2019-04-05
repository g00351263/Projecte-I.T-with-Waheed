

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<style>
	.blinking {
		animation: blinkingText 0.9s infinite;
	}
	
	@keyframes blinkingText {
		0% {
			color: #000;
		}
		49% {
			color: transparent;
		}
		50% {
			color: transparent;
		}
		99% {
			color: transparent;
		}
		100% {
			color: #000;
		}
	}
	
	#banner {
		width: 100%;
	}
	
	.wrapper {
		display: table;
		width: auto;
	}
	
	.row {
		display: table-row;
	}
	
	.first {
		display: table-cell;
		background-color: red;
		width: 200px;
	}
	
	.second {
		display: table-cell;
		background-color: #bada55;
		width: 1500px;
		margin: auto;
	}
	
	.third {
		display: table-cell;
		background-color: #bada55;
		width: auto;
	}
	
	.ads {
		width: 275px;
		height: 500px;
		float: left;
		border: 1px solid black;
		padding: 35px;
		background-color: lightblue;
		margin-left: 20px;
		margin-bottom: 20px;
	}
	
	.description {
		max-width: 300px;
		word-wrap: break-word;
	}
	
	a:link {
		text-decoration: none;
	}
	
	@media screen and (max-width:420px) {
		#third {
			display: none;
			visibility: hidden;
		}
	}
	</style>
			</head>
			<body>
				<img src="images\banner.gif" id="banner" alt="banner" />
				<marquee>Here is your 1 Stop Shop for Galway City</marquee>
				<div class="w3-bar w3-black">
					<a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
					<a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
					<a href="register.php" class="w3-bar-item w3-button w3-mobile">Register</a>
					<a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
					<a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
					<a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
				</div>
				<div class="header">
					<marquee style="font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080" direction="right">Here is your 1 Stop Shop for Galway City</marquee>
					<br>
					</div>
					<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->
					<div class="wrapper">
						<div class="second">
							<div class="w3-bar w3-black">
								<p align="center" style="background-color:black;">Advertisements on Website</p>
								<hr>
									<a href="electronics.php" class="w3-bar-item w3-button w3-mobile">Electronics</a>
									<a href="property.php" class="w3-bar-item w3-button w3-mobile">Property</a>
									<a href="clothings.php" class="w3-bar-item w3-button w3-mobile">Clothings</a>
									<a href="motor.php" class="w3-bar-item w3-button w3-mobile">Motor</a>
								</div>
								<br>
									<?php

 
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "registration";
                  $count = 0;
                  
                  
                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  } 
                  
                  
                  $sql = "SELECT * FROM `ads` order by id desc";
                  $result = $conn->query($sql);
                  
  
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  $count++;
                  $field1name = $row["category"];
                  $field2name = $row["description"];
                  $field3name = $row["price"];
				
                  echo '
				  

									<div class= "ads">
										<a href>
											<img src="data:image/jpeg;base64,'.base64_encode($row['photos'] ).'" height="300" width="200" class="img-thumnail"  />'.'

      
											<p>Category    : '.$field1name. '</p>
											<p class="description">Description : '.$field2name. '</p>
											<p class="blinking">Price : '.$field3name.'</p>

										</a>
									</div>';
} 
		echo '
									<br>
										<div style="float: left";>
											<text align="center">&nbspTotal Ads '.$count.'</text>
										</div>';		
$conn->close();
?>
									</div>
									<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
									<div class="third" id="third">
										<img src="images\ad1.gif" width="500px" />
										<img src="images\ad1.gif" width="500px" />
										<img src="images\ad1.gif" width="500px" />
										<img src="images\ad1.gif" width="500px" />
										<img src="images\ad1.gif" width="500px" />
										<img src="images\ad1.gif" width="500px" />
									</div>
								</div>
								<div>
									<marquee style="align: center; font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080" direction="down">
										<p align="center">Here is your 1 Stop Shop for
				
											<br>Galway City
											</p>
										</marquee>
									</div>
								</body>
							</html>