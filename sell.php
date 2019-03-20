<?php 
   session_start(); 
   
   if (!isset($_SESSION['username'])) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: login.php');
   }
   if (isset($_GET['logout'])) {
   	session_destroy();
   	unset($_SESSION['username']);
   	header("location: login.php");
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Sell Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="style1.css">
      <style>  
   
         #banner{
         width:100%;
         }
		 #wrapper{
	width: 1066.95px; 
	margin: auto; 
	background-color: gold; 
	overflow: hidden; 
	border: 2px solid darkcyan;
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
         <p>
            Welcome 
            <text style="color: red;"><?php echo $_SESSION['username']; ?></text>
         </p>
         <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
         <?php endif ?>
      </div>
      <div class="header">
         <br>
         <h2>Fill in the form below to sell your stuff</h2>
      </div>
      <form method="post" enctype="multipart/form-data">
         
		 <table>
		 <tr>
			<td>
		
            Select Category :
   
			</td>

		 <td>
		    <select name="category">
               <option value="electronics">Electronics</option>
               <option value="motor">Motors</option>
               <option value="clothings">Clothings</option>
               <option value="property">Property</option>
            </select>
		 </td>	
</tr>
		 
		 <tr>
		 <td>
  
            Confirm Id:
            
        </td>
		
		<td>
		 
		 <input type="text" name="username">
		 </td>
		
		</tr>
		
		<tr>
		<td>

            Item Description:
   
		 </td>
		 		 
		 <td>
		             <input type="text" name="description">

		 </td>
		 
		 </tr>
		 <tr>
		  <td>
		 
		             Price:
   
		 </td>
		 		 
		 <td>
		             <input type="text" name="price">

		 </td>
		 </tr>
		 <tr>
		
	 <td>
		 
		             Contact Details:
   
		 </td>
		 		 
		 <td>
		             <input type="text" name="contact">

		 </td>
		 
		 </tr>
	
		 </table>
         <input type="file" name="image" />
         <input type="submit" name="submit" value="Upload" />
	  <br>
	  </form>
	  <br><br>
      <?php
         $dbcon=mysqli_connect('localhost','root','','registration');
         
           // $qry="insert into ads (category,description,username,photos) values ('raja','raja','raja','$image')";
         
           if(isset($_POST['submit']))
           {
            if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
            {
               echo " error ";
            }
            else
            {
         $image = $_FILES['image']['tmp_name'];
                 $image = addslashes(file_get_contents($image));
               saveimage($image);
            }
           }
           function saveimage($image)
           {
         
            	 $dbcon=mysqli_connect('localhost','root','','registration');
         
         $username = mysqli_real_escape_string($dbcon, $_POST['username']);
         $category = mysqli_real_escape_string($dbcon, $_POST['category']);
         $description = mysqli_real_escape_string($dbcon, $_POST['description']);  
         
            $qry="insert into ads (category,description,username,photos) values ('$category','$description','$username','$image')";
         
               $result=mysqli_query($dbcon,$qry);
               if($result)
               {
                   echo " <br/>Image uploaded.";
                   header('location:index.php');
               }
               else
               {
                   echo " error ";
               }
           }
         ?>
		
		 </body>
		 </html>