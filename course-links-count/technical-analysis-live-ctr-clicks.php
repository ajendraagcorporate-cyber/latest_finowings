<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='technical-analysis-live'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='technical-analysis-live'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/stock-market-courses-live");
}
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='technical-analysis-live'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='technical-analysis-live'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/stock-market-courses-live");
}
?>
