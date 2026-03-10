<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 


// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

?>