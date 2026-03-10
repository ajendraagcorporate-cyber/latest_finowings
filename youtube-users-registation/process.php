<?php
header('Content-Type: application/json');

require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;

if (!$link) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

$name    = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
$email   = isset($_POST['email']) ? mysqli_real_escape_string($link, $_POST['email']) : '';
$contact = isset($_POST['contact']) ? mysqli_real_escape_string($link, $_POST['contact']) : '';
$city    = isset($_POST['city']) ? mysqli_real_escape_string($link, $_POST['city']) : '';
$state   = isset($_POST['state']) ? mysqli_real_escape_string($link, $_POST['state']) : '';
$date    = date("Y-m-d");

if (empty($name) || empty($email)) {
    echo json_encode(['status' => 'error', 'message' => 'Name and Email are required']);
    exit();
}

$sql = "INSERT INTO youtube_users_registration (name, email, contact, city, state, created_date) 
        VALUES ('$name', '$email', '$contact', '$city', '$state', '$date')";

if (mysqli_query($link, $sql)) {
    echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . mysqli_error($link)]);
}
?>