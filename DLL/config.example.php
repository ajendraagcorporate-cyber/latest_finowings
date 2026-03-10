<?php
// ============================================================
// FINOWINGS - Database Config TEMPLATE
// ============================================================
// ⚠️  यह EXAMPLE file है। असली config.php कभी GitHub पर push
//    मत करो। GitHub Secrets में credentials डालो।
//
// LOCAL SETUP के लिए:
//   इस file को copy करो → DLL/config.php
//   और अपनी local values भरो
// ============================================================

define('DB_HOST', 'localhost');
define('DB_USER', 'YOUR_DB_USERNAME');   // e.g. u123456789_finowings
define('DB_PASS', 'YOUR_DB_PASSWORD');   // Strong password
define('DB_NAME', 'YOUR_DB_NAME');       // e.g. u123456789_finowings

// ============================================================
// Global Connection
// ============================================================
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8mb4");
?>

