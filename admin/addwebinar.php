<?php
include("config.php");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Image Upload
$target_dir = "media/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$tagline = mysqli_real_escape_string($link, $_REQUEST['tagline']);
$descr = mysqli_real_escape_string($link, $_REQUEST['desc']);
$file = mysqli_real_escape_string($link, $_FILES["fileToUpload"]["name"]);
$created_date = date("Y-m-d h:m:s");

  
// Attempt insert query execution
$sql = "INSERT INTO webinar (title, tagline, descr, image1, created_date, updated_date) VALUES ('$title', '$tagline', '$descr', '$file', '$created_date', '$created_date')";
if(mysqli_query($link, $sql)){
  header( "Location: webinar_list.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
