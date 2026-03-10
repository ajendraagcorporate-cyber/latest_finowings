<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "learn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$about = mysqli_real_escape_string($link, $_REQUEST['about']);
$technical = mysqli_real_escape_string($link, $_REQUEST['technical']);
  
// Attempt insert query execution
$sql = "INSERT INTO webinar (about, technical) VALUES ('$about', '$technical')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Redirecting.......Please wait..";
	header( "refresh:2;url=webinar.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
  
// Close connection
mysqli_close($link);
?>
