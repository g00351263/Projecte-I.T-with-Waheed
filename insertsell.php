<?php
	
	// connection to database //
	$dbcon=mysqli_connect('localhost','root','','registration');
	// $qry="insert into ads (category,description,username,photos) values ('raja','raja','raja','$image')";
	
	// if submit button is pressed //
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

// function to save ad into database //
function saveimage($image)
{
	$dbcon=mysqli_connect('localhost','root','','registration');
	$username = mysqli_real_escape_string($dbcon, $_POST['username']);
	$category = mysqli_real_escape_string($dbcon, $_POST['category']);
	$description = mysqli_real_escape_string($dbcon, $_POST['description']);  
	$price = mysqli_real_escape_string($dbcon, $_POST['price']);  
	$phone = mysqli_real_escape_string($dbcon, $_POST['phone']);
	$qry="insert into ads (category,description,username,photos,price,phone) values ('$category','$description','$username','$image','$price','$phone')";
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
