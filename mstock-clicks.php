<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='mstock'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='mstock'"; 
if(mysqli_query($link, $t))
{
header("Location: https://www.mstock.com/open-demat-account?utm_source=Finowings_MukulAgrawal_Brand&utm_medium=Digital_Media_Brand&utm_campaign=Longtail_campaign&utm_creative=1903x629");	
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='mstock'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='mstock'"; 
if(mysqli_query($link, $t))
{
header("Location: https://www.mstock.com/open-demat-account?utm_source=Finowings_MukulAgrawal_Brand&utm_medium=Digital_Media_Brand&utm_campaign=Longtail_campaign&utm_creative=1903x629");	
?>
