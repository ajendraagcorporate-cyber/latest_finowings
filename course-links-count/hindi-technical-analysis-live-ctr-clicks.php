<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='technical-analysis-live'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='technical-analysis-live'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/stock-market-courses-live-detail/25th-november-technical-analysis-liverec-2025");	
}
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='technical-analysis-live'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='technical-analysis-live'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/stock-market-courses-live-detail/25th-november-technical-analysis-liverec-2025");	
}
?>
