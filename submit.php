<?php
// Central config से DB connection लो - अलग से credentials मत लिखो
require_once __DIR__ . '/DLL/config.php';
// $con अब available है config.php से

$enquiry_type = isset($_POST['enquiry_type']) ? $_POST['enquiry_type'] : '';
$name         = isset($_POST['name'])         ? $_POST['name']         : '';
$email        = isset($_POST['email'])        ? $_POST['email']        : '';
$city         = isset($_POST['city'])         ? $_POST['city']         : '';
$phone        = isset($_POST['phone'])        ? $_POST['phone']        : '';
$message      = isset($_POST['message'])      ? $_POST['message']      : '';

// Attempt insert query execution
if ($enquiry_type != '' && $name != '' && $city != '' && $phone != '') {
    // Escape special characters to prevent SQL injection
    $enquiry_type = mysqli_real_escape_string($con, $enquiry_type);
    $name         = mysqli_real_escape_string($con, $name);
    $email        = mysqli_real_escape_string($con, $email);
    $city         = mysqli_real_escape_string($con, $city);
    $phone        = mysqli_real_escape_string($con, $phone);
    $message      = mysqli_real_escape_string($con, $message);

    $sql = "INSERT INTO enquiry (enquiry_type, namec, email, city, phone, message) 
            VALUES ('$enquiry_type', '$name', '$email', '$city', '$phone', '$message')";

    if (mysqli_query($con, $sql)) {
        echo "Thanks for Your Query.<br />One of our Representative will Contact you Shortly.";
    } else {
        echo "Error: " . mysqli_error($con) . "<br>SQL: " . $sql;
    }
} else {
    echo "Error: Please fill all required fields.";
}
?>
