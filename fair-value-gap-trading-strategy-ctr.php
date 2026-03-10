<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='fair-value-gap-trading-strategy'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='fair-value-gap-trading-strategy'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/mukul-dbs/user-payment/30/1/recorded/web-1ecd768f3a3797c6");	
}
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='fair-value-gap-trading-strategy'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='fair-value-gap-trading-strategy'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/mukul-dbs/user-payment/30/1/recorded/web-1ecd768f3a3797c6");
}
?>
