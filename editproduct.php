if(isset($_GET) & !empty($_GET)){
  $id = $_GET['id'];
}else{
  header('location: products.php');
}
 
if(isset($_POST) & !empty($_POST)){
  $prodname = mysqli_real_escape_string($connection, $_POST['productname']);
  $description = mysqli_real_escape_string($connection, $_POST['productdescription']);
  $category = mysqli_real_escape_string($connection, $_POST['productcategory']);
  $price = mysqli_real_escape_string($connection, $_POST['productprice']);
 
  if(isset($_FILES) & !empty($_FILES)){
    $name = $_FILES['productimage']['name'];
    $size = $_FILES['productimage']['size'];
    $type = $_FILES['productimage']['type'];
    $tmp_name = $_FILES['productimage']['tmp_name'];
 
    $max_size = 10000000;
    $extension = substr($name, strpos($name, '.') + 1);
 
    if(isset($name) && !empty($name)){
      if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
        $location = "uploads/";
        $filepath = $location.$name;
        if(move_uploaded_file($tmp_name, $filepath)){
          $smsg = "Uploaded Successfully";
        }else{
          $fmsg = "Failed to Upload File";
        }
      }else{
        $fmsg = "Only JPG files are allowed and should be less that 1MB";
      }
    }else{
      $fmsg = "Please Select a File";
    }
  }else{
    $filepath = $_POST['filepath'];
  } 
 
  $sql = "UPDATE products SET name='$prodname', description='$description', catid='$category', price='$price', thumb='$filepath' WHERE id = $id";
  $res = mysqli_query($connection, $sql);
  if($res){
    $smsg = "Product Updated";
  }else{
    $fmsg = "Failed to Update Product";
  }
}