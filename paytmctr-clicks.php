<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='paytm'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='paytm'"; 
if(mysqli_query($link, $t))
{
header("Location: https://paytmmoney.onelink.me/9L59/mfoszu1l");	
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='paytm'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='paytm'"; 
if(mysqli_query($link, $t))
{
header("Location: https://paytmmoney.onelink.me/9L59/mfoszu1l");	
?>
