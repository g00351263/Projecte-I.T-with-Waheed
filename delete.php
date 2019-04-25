<?php
	$conn = mysql_connect('localhost','root','');
	$db   = mysql_select_db('registration', $conn);
    				  
if(isset($_GET['del']))
{
	$id = $_GET['del'];
	$sql = "DELETE FROM ads WHERE id='$id'";
	$res = mysql_query($sql) or die("Failed".mysql_error());
	echo "<meta http-equiv='refresh' content='0;url=sell.php'>";
}

?>