<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='foundation-day-qa'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='foundation-day-qa'"; 
if(mysqli_query($link, $t))
{
header("Location: https://us02web.zoom.us/webinar/register/WN_FL0HRVplS3m4cqSdFrX1zQ");	
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='foundation-day-qa'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='foundation-day-qa'"; 
if(mysqli_query($link, $t))
{
header("Location: https://us02web.zoom.us/webinar/register/WN_FL0HRVplS3m4cqSdFrX1zQ");	
?>
