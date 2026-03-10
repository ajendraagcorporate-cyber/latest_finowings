<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "learn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
  
// Attempt insert query execution
$sql = "INSERT INTO contact (address, mobile, email) VALUES ('$address', '$mobile', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Redirecting.......Please wait..";
	header( "refresh:2;url=contact.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>