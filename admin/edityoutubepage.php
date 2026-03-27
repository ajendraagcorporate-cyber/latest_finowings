<?php
session_start();
include("head.php");
include("config.php");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$short_desc = mysqli_real_escape_string($link, $_REQUEST['short_desc']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$p1 = mysqli_real_escape_string($link, $_REQUEST['p1']);
$p2 = mysqli_real_escape_string($link, $_REQUEST['p2']);
$p3 = mysqli_real_escape_string($link, $_REQUEST['p3']);
$p4 = mysqli_real_escape_string($link, $_REQUEST['p4']);
$p5 = mysqli_real_escape_string($link, $_REQUEST['p5']);
$p6 = mysqli_real_escape_string($link, $_REQUEST['p6']);
$p7 = mysqli_real_escape_string($link, $_REQUEST['p7']);
$community_link = mysqli_real_escape_string($link, $_REQUEST['community_link']);

$username = $_SESSION['user']['username'];
  
// Attempt update query execution
$sql = "UPDATE youtube_landingpage SET title='$title', short_desc='$short_desc', date='$date', p1='$p1', p2='$p2', p3='$p3', p4='$p4', p5='$p5', p6='$p6', p7='$p7', community_link='$community_link' where id='$id'";
if(mysqli_query($link, $sql)){
    header( "Location: edit-youtube-page.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
