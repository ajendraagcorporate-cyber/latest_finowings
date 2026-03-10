<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "learn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$file = mysqli_real_escape_string($link, $_REQUEST['file']);
$file_b = mysqli_real_escape_string($link, $_REQUEST['file_b']);
$file_c = mysqli_real_escape_string($link, $_REQUEST['file_c']);
$file_d = mysqli_real_escape_string($link, $_REQUEST['file_d']);
  
// Attempt insert query execution
$sql = "INSERT INTO featured (file, file_b, file_c, file_d) VALUES ('$file', '$file_b', '$file_c', '$file_d')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Redirecting.......Please wait..";
	header( "refresh:2;url=social.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>