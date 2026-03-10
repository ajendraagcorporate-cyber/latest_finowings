<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='upstox'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='upstox'"; 
if(mysqli_query($link, $t))
{
header("Location: https://upstox.com/open-account/?f=2FC9VX");	
}
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='upstox'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='upstox'"; 
if(mysqli_query($link, $t))
{
header("Location: https://upstox.com/open-account/?f=2FC9VX");	
}
?>
