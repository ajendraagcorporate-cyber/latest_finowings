<?php
include("config.php");
$name = $_REQUEST['rname'];
$email = $_REQUEST['remail'];
$mobile = $_REQUEST['rphone'];
$city = $_REQUEST['rcity'];
$date = date("Y-m-d h:m:s");
// Attempt insert query execution
$sql = "INSERT INTO adpage_leads (uname, email, mobile, city, created_date) VALUES ('$name', '$email', '$mobile', '$city', '$date')";
if(mysqli_query($link, $sql)){
  header( "Location: thanks.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>