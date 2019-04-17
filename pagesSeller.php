<?php
   
 
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "registration";
                  $count = 0;
                  $name = $_SESSION['username'];

				
				
				  
                  
                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  } 
                  

                  $sql = "SELECT * FROM `ads` WHERE username = '$name'";
                  
  
  $result = $conn->query($sql);
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  $count++;
                  $field1name = $row["category"];
                  $field2name = $row["description"];
                  $field3name = $row["price"];
				  $field4name = $row["phone"];
				
				

                  echo ' 
									<div class= "ads">
										<a href target="_new">
											<img src="data:image/jpeg;base64,'.base64_encode($row['photos'] ).'" height="300" width="200" class="img-thumnail"  />'.'

      
											<p>Category    : '.$field1name. '</p>
											<p class="description">Description : '.$field2name. '</p>
											<p class="blinking">Price : '.$field3name.'</p>
											<p class="Contact">Phone : '.$field4name. '</p>

										</a>
									</div>';
								
} 
											
$conn->close();
?>
									