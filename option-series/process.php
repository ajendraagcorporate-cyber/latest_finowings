<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
 
//include("../dll/config.php");
// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$state = $_POST['state'];
$date = date("Y-m-d");
// Execute query
$sql = "INSERT INTO intraday_strategy_registration (name, email, contact, city, state, created_date) VALUES ('$name', '$email', '$contact', '$city', '$state', '$date')";
if(mysqli_query($link, $sql)){
    echo json_encode(['status'=>'success', 'message'=>'Registration successful']);
} else {
    echo json_encode(['status'=>'error', 'message'=>'Database error: '.mysqli_error($link)]);
?>SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
//include("../dll/config.php");
// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$state = $_POST['state'];
$date = date("Y-m-d");
// Execute query
$sql = "INSERT INTO intraday_strategy_registration (name, email, contact, city, state, created_date) VALUES ('$name', '$email', '$contact', '$city', '$state', '$date')";
if(mysqli_query($link, $sql)){
    echo json_encode(['status'=>'success', 'message'=>'Registration successful']);
} else {
    echo json_encode(['status'=>'error', 'message'=>'Database error: '.mysqli_error($link)]);
?>
