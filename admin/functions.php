<?php

session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "learn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$file = mysqli_real_escape_string($link, $_REQUEST['file']);
$file_t = mysqli_real_escape_string($link, $_REQUEST['file_t']);
$webinar = mysqli_real_escape_string($link, $_REQUEST['webinar']);
$webinarc = mysqli_real_escape_string($link, $_REQUEST['webinarc']);


  
// Attempt insert query execution
$sql = "INSERT INTO home (file, file_t, webinar, webinarc) VALUES ('$file', '$file_t', '$webinar', '$webinarc')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Redirecting.......Please wait..";
	//header("location: home.php");
	header( "refresh:2;url=home.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

 // save file in directory
if(isset($_POST['upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "admin/images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "insert into home(name) values('".$name."')";
        mysqli_query($con,$query);
     }

  }
 
}

?>


<form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save name' name='but_upload'>
</form>
