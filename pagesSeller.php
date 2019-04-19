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
                  

                  $sql = "SELECT * FROM `ads` WHERE username = '$name' order by id desc";
                  
  
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
									<div class= "ads" align="center">
										<a href="delete.php?del='.$field5name.'">Delete</a>
											<img src="data:image/jpeg;base64,'.base64_encode($row['photos'] ).'" height="300" width="200" class="img-thumnail"  />'.'

      
											<p>Category    : '.$field1name. '</p>
											<p class="description">Description : '.$field2name. '</p>
											<p class="blinking">Price : '.$field3name.'</p>
											
								
									</div>';
								
} 
											
$conn->close();
?>
									