<!DOCTYPE html>
<html>
  <head>
    <title>Home
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
      .ads {
        width: 280px;
        height: 420px;
        float: left;
        border: 1px solid black;
        padding: 5px;
        background-color: lightblue;
        margin-left: 20px;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <img src="images\banner.gif" id="banner"   alt="banner" style="width: 100%;"/>
    <marquee>Here is your 1 Stop Shop for Galway City
    </marquee>
    <div  class="w3-bar w3-black">
      <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home
      </a>
      <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell
      </a>
      <a href="register.php" class="w3-bar-item w3-button w3-mobile">Register
      </a>
      <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In
      </a>
      <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us
      </a>
      <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us
      </a>
    </div>
    <div class="header">
      <marquee style="font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080"  direction="right">Here is your 1 Stop Shop for Galway City
      </marquee>
      <br>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->
    <div class="wrapper">
      <div class="second">
        <div  class="w3-bar w3-black">
          <p align="center" style="background-color:black;">Advertisements on Website
          </p>
          <hr>
          <a href="electronics.php" class="w3-bar-item w3-button w3-mobile">Electronics
          </a>
          <a href="property.php" class="w3-bar-item w3-button w3-mobile">Property
          </a>
          <a href="clothings.php" class="w3-bar-item w3-button w3-mobile">Clothings
          </a>
          <a href="motor.php" class="w3-bar-item w3-button w3-mobile">Motor
          </a>
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
$sql = "SELECT * FROM `ads` where category='electronics' ORDER by id desc";
$result = $conn->query($sql);
// output data of each row
while($row = $result->fetch_assoc()) {
$count++;
$field1name = $row["category"];
$field2name = $row["description"];
$field3name = $row["price"];
$field4name = $row["phone"];
$field5name = $row["id"];
echo '
<div class= "ads">
<a href="popUp.php?pop='.$field5name.'">
<img style="margin-right: auto; margin-left: auto; display: block;" src="data:image/jpeg;base64,'.base64_encode($row['photos'] ).'" height="250" width="150" class="img-thumnail"  />'.'
<p>Category    : '.$field1name. '</p>
<p class="description">Description : '.$field2name. '</p>
<p class="blinking">Price : '.$field3name.'</p>
<p style="align: center; color: blue;">Click to See Details</p>
</a>
</div>';
}
echo '<p align="center">Records Found '.$count.'</p>';
$conn->close();
?> 
      </div>
      <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
      <div class="third" id="third" >
        <img src="images\ad1.gif" width="500px" />
        <img src="images\ad1.gif" width="500px"/>
        <img src="images\ad1.gif"width="500px" />
        <img src="images\ad1.gif" width="500px"/>
        <img src="images\ad1.gif"  width="500px"/>
      </div>
    </div>
    <div> 
      <marquee style="align: center; font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080"  direction="down">
        <p align="center">Here is your 1 Stop Shop for 
          <br>Galway City
        </p>
      </marquee>
    </div>
  </body>
</html>
