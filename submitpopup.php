<?php
// Central config से DB connection लो
require_once __DIR__ . '/DLL/config.php';
// $con अब available है config.php से

$pname  = isset($_POST['pname'])  ? $_POST['pname']  : '';
$pphone = isset($_POST['pphone']) ? $_POST['pphone'] : '';
$pcity  = isset($_POST['pcity'])  ? $_POST['pcity']  : '';
$pemail = isset($_POST['pemail']) ? $_POST['pemail'] : '';

if ($pname != '' && $pphone != '' && $pcity != '' && $pemail != '') {
    $pname  = mysqli_real_escape_string($con, $pname);
    $pphone = mysqli_real_escape_string($con, $pphone);
    $pcity  = mysqli_real_escape_string($con, $pcity);
    $pemail = mysqli_real_escape_string($con, $pemail);

    // Duplicate check
    $sql1  = "SELECT * FROM popup_enquiry WHERE phone='$pphone' and email='$pemail'";
    $c     = mysqli_query($con, $sql1);
    $count = mysqli_num_rows($c);

    if ($count == 0) {
        $date = date("Y-m-d H:i:s");
        $sql  = "INSERT INTO popup_enquiry (name, phone, city, email, created_date) 
                 VALUES ('$pname', '$pphone', '$pcity', '$pemail', '$date')";
        mysqli_query($con, $sql);
        echo "Thanks for Your Query.<br />One of our Representative will Contact you Shortly.";
    }
}
?>
