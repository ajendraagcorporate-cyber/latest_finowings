<?php
// Central config से DB connection लो
require_once __DIR__ . '/DLL/config.php';
// $con अब available है config.php से

// Today's Date
$date = date("Y-m-d");

// Check for existing count
$query  = "SELECT * FROM demat_counter WHERE view_type='main' and view_date='$date'";
$result = mysqli_query($con, $query);
$rows   = mysqli_fetch_array($result);
$counter = $rows['totalview'];

if (empty($counter)) {
    $counter = 1;
    $q = "INSERT INTO demat_counter (totalview, view_type, view_date) VALUES ('$counter', 'main', '$date')";
    mysqli_query($con, $q);
} else {
    $counter = $counter + 1;
    $t = "UPDATE demat_counter SET totalview='$counter' WHERE view_type='main' AND view_date='$date'";
    mysqli_query($con, $t);
}

header("Location: https://www.finowings.com/demat-accounts.php");
exit;
?>
