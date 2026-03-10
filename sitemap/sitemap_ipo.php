<?php
require_once <?php
// Hide warnings/notices
error_reporting(0);
ini_set('display_errors', 0);

// Output XML header
header("Content-Type: application/xml; charset=utf-8");

// Base blog URL
$base_url = "https://www.finowings.com/IPO/";

// DB connection
$servername = "localhost";
$username = DB_USER;  // replace with your DB username
$password = DB_PASS;  // replace with your DB password
$dbname   = DB_NAME; // replace with your DB name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    // Terminate silently to prevent breaking XML
    exit;
}

// Fetch published blogs in categories 7 & 14
$sql = "SELECT blog_url, updated_date 
        FROM blog
        WHERE is_publish='Yes' AND cat_id IN (7,14)
        ORDER BY updated_date DESC";

$result = $conn->query($sql);

// Start XML output
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $loc = htmlspecialchars($base_url . trim($row['blog_url']));
        $lastmod = date("Y-m-d", strtotime($row['updated_date']));

        echo "<url>
                <loc>$loc</loc>
                <lastmod>$lastmod</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.7</priority>
              </url>";
    }
}

echo '</urlset>';

// Close DB connection
$conn->close();
SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
// Hide warnings/notices
error_reporting(0);
ini_set('display_errors', 0);

// Output XML header
header("Content-Type: application/xml; charset=utf-8");

// Base blog URL
$base_url = "https://www.finowings.com/IPO/";

// DB connection
$servername = "localhost";
$username = DB_USER;  // replace with your DB username
$password = DB_PASS;  // replace with your DB password
$dbname   = DB_NAME; // replace with your DB name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    // Terminate silently to prevent breaking XML
    exit;
}

// Fetch published blogs in categories 7 & 14
$sql = "SELECT blog_url, updated_date 
        FROM blog
        WHERE is_publish='Yes' AND cat_id IN (7,14)
        ORDER BY updated_date DESC";

$result = $conn->query($sql);

// Start XML output
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $loc = htmlspecialchars($base_url . trim($row['blog_url']));
        $lastmod = date("Y-m-d", strtotime($row['updated_date']));

        echo "<url>
                <loc>$loc</loc>
                <lastmod>$lastmod</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.7</priority>
              </url>";
    }
}

echo '</urlset>';

// Close DB connection
$conn->close();
