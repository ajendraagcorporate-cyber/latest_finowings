<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='alice-blue'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='alice-blue'"; 
if(mysqli_query($link, $t))
{
header("Location: https://ekyc.aliceblueonline.com/?source=WMPN837");
}
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='alice-blue'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='alice-blue'"; 
if(mysqli_query($link, $t))
{
header("Location: https://ekyc.aliceblueonline.com/?source=WMPN837");	
}
?>
