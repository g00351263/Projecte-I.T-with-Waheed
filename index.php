<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="css/style1.css">
	  <link rel="stylesheet" href="css/style.css">
</head>
<body>

      <img src="images\banner.gif" id="banner" alt="banner"/>
      
	  <marquee>Here is your 1 Stop Shop for Galway City</marquee>
      
<div id="bor" class="w3-bar w3-black" style="border-color: white; border-style: solid;">
	  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
      <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
      <a href="register.php" class="w3-bar-item w3-button w3-mobile">Register</a>
      <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
      <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
      <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
</div>
<div class="header">
<br>





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
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
	
<br>
<!-- Page content -->
<div class="main">
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
         
         if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
$count++;
		$field1name = $row["category"];
		$field2name = $row["description"];
        $field3name = $row["username"];
		
	echo '<div id="adTable" align="center">
			<table border="1" id="size1" style="width:50%">
				<tr>
					<td style="width:25%"><a href="buy.php"><img src="data:image/jpeg;base64,'.base64_encode($row['photos'] ).'" height="200" width="200" class="img-thumnail"/>'.'
				</td>
										<td id="td1"><b>Category : '.$field1name. '<br>Description : ' .$field3name.'</b><br/><br>
					</td>
				</tr>
					
				
				<tr>
					<td><b>Category : '.$field1name. '<br>Description : ' .$field3name.'</b><br/><br>
					</td></a>
										<td><b>Category : '.$field1name. '<br>Description : ' .$field3name.'</b><br/><br>
					</td></a>
				</tr>
			</table></div><br>';
  				 
             }
			 echo "<p align='center'>Total Records Found $count</p>";
         } else {
             echo "0 results";
         }
         
         $conn->close();
         ?> 

</div>

	
</body>
</html>

