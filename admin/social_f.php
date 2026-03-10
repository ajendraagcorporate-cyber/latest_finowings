<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "learn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$facebook = mysqli_real_escape_string($link, $_REQUEST['facebook']);
$instagram = mysqli_real_escape_string($link, $_REQUEST['instagram']);
$twitter = mysqli_real_escape_string($link, $_REQUEST['twitter']);
$youtube = mysqli_real_escape_string($link, $_REQUEST['youtube']);
  
// Attempt insert query execution
$sql = "INSERT INTO social (facebook, instagram, twitter, youtube) VALUES ('$facebook', '$instagram', '$twitter', '$youtube')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Redirecting.......Please wait..";
	header( "refresh:2;url=social.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>