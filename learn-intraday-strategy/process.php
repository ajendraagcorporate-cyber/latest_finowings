<?php
// 1. JSON रिस्पॉन्स के लिए हेडर सेट करें
header('Content-Type: application/json');

// 2. डेटाबेस कनेक्शन लोड करें
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;

// 3. चेक करें कि डेटाबेस से कनेक्शन है या नहीं
if (!$link) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

// 4. फॉर्म डेटा प्राप्त करें (isset चेक के साथ ताकि वार्निंग न आए)
$name    = isset($_POST['name']) ? mysqli_real_escape_string($link, $_POST['name']) : '';
$email   = isset($_POST['email']) ? mysqli_real_escape_string($link, $_POST['email']) : '';
$contact = isset($_POST['contact']) ? mysqli_real_escape_string($link, $_POST['contact']) : '';
$city    = isset($_POST['city']) ? mysqli_real_escape_string($link, $_POST['city']) : '';
$state   = isset($_POST['state']) ? mysqli_real_escape_string($link, $_POST['state']) : '';
$date    = date("Y-m-d");

// 5. अगर जरूरी डेटा गायब है
if (empty($name) || empty($email)) {
    echo json_encode(['status' => 'error', 'message' => 'Name and Email are required']);
    exit();
}

// 6. SQL क्वेरी चलाएं
$sql = "INSERT INTO intraday_strategy_registration (name, email, contact, city, state, created_date) 
        VALUES ('$name', '$email', '$contact', '$city', '$state', '$date')";

if (mysqli_query($link, $sql)) {
    echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . mysqli_error($link)]);
}

// फाइल के आखिर में कोई और फालतू टेक्स्ट नहीं होना चाहिए
?>