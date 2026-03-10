<?php
$host = "localhost"; /* Host name */
$user = "u935223235_finowings_user"; /* User */
$password = "i7HC?FJB$@"; /* Password */
$dbname = "u935223235_finowings_db"; /* Database name */

$link = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
