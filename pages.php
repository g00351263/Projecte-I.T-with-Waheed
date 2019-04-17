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
									