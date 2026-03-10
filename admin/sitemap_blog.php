<?php
require_once <?php
// ---------- IMPORTANT ----------
// Save this PHP file as UTF-8 WITHOUT BOM and make sure there are
// no blank lines/characters before the opening <?php tag.
// --------------------------------

// turn off error display (so notices/warnings don't break XML)
ini_set('display_errors', 0);
error_reporting(0);

// clear any existing output buffers (start with a clean slate)
while (ob_get_level()) {
    ob_end_clean();
}
ob_start(); // start fresh buffer to capture accidental output

// DB credentials - replace with your real values
$db_host = 'localhost';
$db_user = DB_USER;
$db_pass = DB_PASS;
$db_name = DB_NAME;

// base site url (ensure trailing slash)
$base_url = "https://www.finowings.com/";

// connect
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    // silently exit (no body) to avoid breaking parsers
    ob_end_clean();
    header('HTTP/1.1 500 Internal Server Error');
    exit;
}

// query: exclude categories 7 and 14
$sql = "SELECT b.blog_url, b.updated_date, c.cat_name
        FROM blog b
        JOIN blog_category c ON b.cat_id = c.id
        WHERE b.is_publish = 'Yes'
          AND b.cat_id NOT IN (7,14)
        ORDER BY b.updated_date DESC";

$result = $conn->query($sql);

// build XML into a string (no echo yet)
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // preserve case, only replace spaces with hyphen(s)
        $category_raw = trim($row['cat_name']);
        // collapse multiple spaces and replace with single hyphen
        $category_clean = preg_replace('/\s+/', ' ', $category_raw);
        $category_slug = str_replace(' ', '-', $category_clean);

        $slug = trim($row['blog_url']);
        $loc = $base_url . $category_slug . '/' . $slug;
        $lastmod = date('Y-m-d', strtotime($row['updated_date']));

        // escape for XML
        $loc_escaped = htmlspecialchars($loc, ENT_XML1 | ENT_COMPAT, 'UTF-8');

        $xml .= "  <url>\n";
        $xml .= "    <loc>{$loc_escaped}</loc>\n";
        $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
        $xml .= "    <changefreq>monthly</changefreq>\n";
        $xml .= "    <priority>0.7</priority>\n";
        $xml .= "  </url>\n";
    }
}

$xml .= '</urlset>';

// capture and clear any accidental buffered output (and remove BOM if present)
$buffered = ob_get_clean(); // get and clean the buffer
if ($buffered !== '') {
    // remove BOM if it exists at the start of buffer
    if (substr($buffered, 0, 3) === "\xEF\xBB\xBF") {
        $buffered = substr($buffered, 3);
    }
    // we intentionally discard $buffered — do NOT output it
}

// send header and XML (no extra whitespace)
header('Content-Type: application/xml; charset=utf-8');
echo $xml;

$conn->close();
// no closing PHP tag to avoid accidental trailing newline
SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
// ---------- IMPORTANT ----------
// Save this PHP file as UTF-8 WITHOUT BOM and make sure there are
// no blank lines/characters before the opening <?php tag.
// --------------------------------

// turn off error display (so notices/warnings don't break XML)
ini_set('display_errors', 0);
error_reporting(0);

// clear any existing output buffers (start with a clean slate)
while (ob_get_level()) {
    ob_end_clean();
}
ob_start(); // start fresh buffer to capture accidental output

// DB credentials - replace with your real values
$db_host = 'localhost';
$db_user = DB_USER;
$db_pass = DB_PASS;
$db_name = DB_NAME;

// base site url (ensure trailing slash)
$base_url = "https://www.finowings.com/";

// connect
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    // silently exit (no body) to avoid breaking parsers
    ob_end_clean();
    header('HTTP/1.1 500 Internal Server Error');
    exit;
}

// query: exclude categories 7 and 14
$sql = "SELECT b.blog_url, b.updated_date, c.cat_name
        FROM blog b
        JOIN blog_category c ON b.cat_id = c.id
        WHERE b.is_publish = 'Yes'
          AND b.cat_id NOT IN (7,14)
        ORDER BY b.updated_date DESC";

$result = $conn->query($sql);

// build XML into a string (no echo yet)
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // preserve case, only replace spaces with hyphen(s)
        $category_raw = trim($row['cat_name']);
        // collapse multiple spaces and replace with single hyphen
        $category_clean = preg_replace('/\s+/', ' ', $category_raw);
        $category_slug = str_replace(' ', '-', $category_clean);

        $slug = trim($row['blog_url']);
        $loc = $base_url . $category_slug . '/' . $slug;
        $lastmod = date('Y-m-d', strtotime($row['updated_date']));

        // escape for XML
        $loc_escaped = htmlspecialchars($loc, ENT_XML1 | ENT_COMPAT, 'UTF-8');

        $xml .= "  <url>\n";
        $xml .= "    <loc>{$loc_escaped}</loc>\n";
        $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
        $xml .= "    <changefreq>monthly</changefreq>\n";
        $xml .= "    <priority>0.7</priority>\n";
        $xml .= "  </url>\n";
    }
}

$xml .= '</urlset>';

// capture and clear any accidental buffered output (and remove BOM if present)
$buffered = ob_get_clean(); // get and clean the buffer
if ($buffered !== '') {
    // remove BOM if it exists at the start of buffer
    if (substr($buffered, 0, 3) === "\xEF\xBB\xBF") {
        $buffered = substr($buffered, 3);
    }
    // we intentionally discard $buffered — do NOT output it
}

// send header and XML (no extra whitespace)
header('Content-Type: application/xml; charset=utf-8');
echo $xml;

$conn->close();
// no closing PHP tag to avoid accidental trailing newline
