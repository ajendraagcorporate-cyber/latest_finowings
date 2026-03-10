<?php
include('config.php');

// Table name
$table = "intraday_strategy_registration";

// Excel file headers
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=table_export_" . date('d-m-Y') . ".xls");

// Query
$sql = "SELECT * FROM $table";
$result = mysqli_query($link, $sql);

// Column names
echo "<table border='1'>";
echo "<tr>";
while ($field = mysqli_fetch_field($result)) {
    echo "<th>" . $field->name . "</th>";
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

echo "</table>";
exit;
?>
