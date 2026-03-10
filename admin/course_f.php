<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "learn");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$img = mysqli_real_escape_string($link, $_REQUEST['img']);
$course_title = mysqli_real_escape_string($link, $_REQUEST['course_title']);
$content = mysqli_real_escape_string($link, $_REQUEST['content']);
$sale_p = mysqli_real_escape_string($link, $_REQUEST['sale_p']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
  
// Attempt insert query execution
$sql = "INSERT INTO course (img, course_title, content, sale_p, price) VALUES ('$img', '$course_title', '$content', '$sale_p', '$price')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully. Redirecting.......Please wait..";
	header( "refresh:2;url=course.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>