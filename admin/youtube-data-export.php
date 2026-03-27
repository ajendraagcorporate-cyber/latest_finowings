<?php
include('config.php');

// Table name
$table = "youtube_users_registration";

// Excel file headers
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=youtube_registrants_" . date('d-m-Y') . ".xls");

// Query
$sql = "SELECT * FROM $table ORDER BY id DESC";
$result = mysqli_query($link, $sql);

// Column names
echo "<table border='1'>";
echo "<tr>";
if ($result) {
    while ($field = mysqli_fetch_field($result)) {
        echo "<th>" . strtoupper($field->name) . "</th>";
    }
    echo "</tr>";

    // Data rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td>No records found or table does not exist.</td></tr>";
}

echo "</table>";
exit;
?>
