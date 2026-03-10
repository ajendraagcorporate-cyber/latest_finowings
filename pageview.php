<?php
// ================================================================

// Force HTTPS and 'www.' for consistent URL tracking to prevent duplicate entries
$host = $_SERVER['HTTP_HOST'];
if (strpos($host, 'www.') !== 0) {
    $host = 'www.' . $host;
}
$page_url  = "https://" . $host . $_SERVER['REQUEST_URI'];
$page_url_safe = mysqli_real_escape_string($con, $page_url);


$query  = "SELECT totalview FROM pageview WHERE pageurl='$page_url_safe'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // URL hai - count +1 karo (har refresh/open par)
    $rows    = mysqli_fetch_array($result);
    $counter = (int)$rows['totalview'] + 1;
    $sql     = "UPDATE pageview SET totalview='$counter' WHERE pageurl='$page_url_safe'";
} else {
    // URL nahi hai - naya record insert karo, count = 1
    $sql = "INSERT INTO pageview (pageurl, totalview) VALUES ('$page_url_safe', '1')";
}

mysqli_query($con, $sql);
?>