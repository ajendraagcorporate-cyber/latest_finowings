<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "learn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$photo = mysqli_real_escape_string($link, $_REQUEST['photo']);
$about_mukul = mysqli_real_escape_string($link, $_REQUEST['about_mukul']);
$Why = mysqli_real_escape_string($link, $_REQUEST['Why']);
  
// Attempt insert query execution
$sql = "INSERT INTO about (photo, about_mukul, Why) VALUES ('$photo', '$about_mukul', '$Why')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Redirecting.......Please wait..";
	header( "refresh:2;url=about.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>