<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='class-ctr'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='class-ctr'"; 
if(mysqli_query($link, $t))
{
header("Location: https://www.finowings.com/technical-class-enquiry/");	
}
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='class-ctr'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='class-ctr'"; 
if(mysqli_query($link, $t))
{
header("Location: https://www.finowings.com/technical-class-enquiry/");	
}
?>
