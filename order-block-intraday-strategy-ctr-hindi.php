<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='order-block-intraday-strategy'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='order-block-intraday-strategy'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/mukul-dbs/user-payment/28/1/recorded/web-1ecd768f3a3797c6");	
}
?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counterhindi WHERE view_type='order-block-intraday-strategy'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counterhindi SET totalview='".$counter."' WHERE view_type='order-block-intraday-strategy'"; 
if(mysqli_query($link, $t))
{
header("Location: https://courses.finowings.com/mukul-dbs/user-payment/28/1/recorded/web-1ecd768f3a3797c6");	
}
?>
