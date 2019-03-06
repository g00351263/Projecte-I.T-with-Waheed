<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="cs/style1.css">
<link rel="stylesheet" href="cs/style.css">
	<style>  
  #banner{
          width:100%;
		  padding-left:160px;
     }
@media screen and (max-width:600px){
    #banner{
        padding-left: 0px;
    }
}
</style>
</head>
<body>

      <img src="images\banner.gif" id="banner"   alt="banner"/>
      
	  <marquee>Here is your 1 Stop Shop for Galway City</marquee>
<div  class="w3-bar w3-black" style="padding-left:160px;">
	  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
      <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
      <a href="register.php" class="w3-bar-item w3-button w3-mobile">Register</a>
      <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
      <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
      <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
</div>
<div class="header">
<marquee style="font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080"  direction="right">Here is your 1 Stop Shop for Galway City</marquee>
<br>
<div class="row">
<div class="column1">
<!-- Side navigation -->
<div class="sidenav">
  <a href="electronics.php">Electroics</a>
  <a href="motor.php">Motor</a>
  <a href="property.php">Property</a>
  <a href="jobs.php">Jobs</a>
</div>
</div>

<div class="column">
<p align="center">ALL ITEMS FOR SALE</p>
<div class="content" >
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
         

         $sql = "SELECT * FROM `ads` where category='property' ORDER by id desc";
         $result = $conn->query($sql);
         
         if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
$count++;
		$field1name = $row["category"];
		$field2name = $row["description"];
        $field3name = $row["username"];
		
	echo '<div id="adTable" align="center">
	
			<table border="1" class="size1" id="size1" style="width:95%">
				<tr>
					<td id="sizephoto" style="width:25%"><a href="buy.php"><img src="data:image/jpeg;base64,'.base64_encode($row['photos'] ).'" height="200" width="200" class="img-thumnail"/>'.'
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
<marquee style="align: center; font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080"  direction="down"><p align="center">Here is your 1 Stop Shop for <br>Galway City</p></marquee>
</div>

<div class="column1">
	<div class="sidenav2" align="right" >  
		<img src="images\ad1.gif" />
		<img src="images\ad1.gif"/>
		<img src="images\ad1.gif" />
		<img src="images\ad1.gif"/>
		<img src="images\ad1.gif"  />
	</div>
</div>
</div>
</body>
</html>

