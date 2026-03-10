<?php
$enquiry_type = $_POST['enquiry_type'] ;
$name = $_POST['name'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$message = $_POST['message'];
  
$host = "localhost"; /* Host name */
$user = "agrawalc_testing"; /* User */
$password = "SauMuklAg@#451"; /* Password */
$dbname = "agrawalc_finowings"; /* Database name */
 
$link = mysqli_connect($host, $user, $password,$dbname);  
// Attempt insert query execution
if($enquiry_type != '' &&  $name !='' && $city != '' && $phone !='')
{
$sql = "INSERT INTO enquiry (enquiry_type, namec, city, phone, message) VALUES ('$enquiry_type', '$name', '$city', '$phone', '$message')";
mysqli_query($link, $sql);
echo "Thanks for Your Query.<br />One of our Representative will Contact you Shortly."; 
}
mysqli_close($link);  
?>


