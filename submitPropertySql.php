<?php
  
  $msg = "";

.
  if (isset($_POST['submit1'])) {
 
  	$target = "images/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "root", "root", "rental_mng");

      $image = $_FILES['image']['name'];
    $Text = $_POST(['Text']]);

  	$sql = "INSERT INTO image_upload (image, Text) VALUES ('$image', '$Text')";
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
    header("Location:signup.html");
  
  }
?>