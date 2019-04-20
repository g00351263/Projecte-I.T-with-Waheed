<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$count = 0;
// How many records per page
$rpp = 12;
//Check for set page
isset($_GET['page']) ? $page = $_GET['page'] : $page =0;
//check for page 1;
if($page > 1){
$start = ($page * $rpp) - $rpp;
}else{
$start = 0;
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id FROM `ads`";
$result = $conn->query($sql);
$numRows = $result->num_rows;
$totalPages = $numRows / $rpp;
$sql = "SELECT * FROM `ads` order by id desc LIMIT $start, $rpp";
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
echo '<p>&nbspPage</p>';						for($x = 1; $x<= $totalPages + 1; $x++){
echo "<div class='pages'><a href='?page=$x' >&nbsp&nbsp&nbsp$x</a></div>";
}
echo '
<br>
<div style="float: left";>
<text align="center">&nbspTotal Ads '.$count.'</text>
</div><br></div>';	
$conn->close();
?>
