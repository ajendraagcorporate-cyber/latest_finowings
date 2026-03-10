<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;

// Today's Date
$date = date("Y-m-d");

// Check for count
$query  = "SELECT * FROM demat_counter WHERE view_type='main' AND view_date='$date'"; 
$result = mysqli_query($link, $query);
$rows   = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 

if (empty($counter)) {
    $counter = 1;
    $q = "INSERT INTO demat_counter (totalview, view_type, view_date) VALUES ('".$counter."', 'main', '".$date."')";
    mysqli_query($link, $q); 
} else {
    $counter = $counter + 1;
    $t = "UPDATE demat_counter SET totalview='".$counter."' WHERE view_date='$date'"; 
    mysqli_query($link, $t);
}

header("Location: https://www.finowings.com/open-demat-account.php");
exit;
?>
