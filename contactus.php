<!DOCTYPE html>
<html>
<head>
<style>
#waheed{
  width: 100%;
  max-width: 400px;
  height: auto;
}
#raja{
  width: 100%;
  max-width: 400px;
  height: auto;
}
     #banner{
          width:100%;
     }
  * {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>   
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="cs/style.css">

<body> 
      <img src="images\banner.gif" id="banner"  alt="banner"/>
<marquee>Here is your 1 Stop Shop for Galway City</marquee>

<div  class="w3-bar w3-black" style="padding-left:160px;">
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="sell.php" class="w3-bar-item w3-button w3-mobile">Sell</a>
  <a href="register.php" class="w3-bar-item w3-button w3-mobile">Sign Up</a>
  <a href="login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
  <a href="about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
  <a href="contactus.php" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
</div>
<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Ireland</option>
      <option value="canada">U.K</option>
      <option value="usa">Pakistan</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
