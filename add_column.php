<?php
include("admin/config.php");
$query = "ALTER TABLE blog ADD COLUMN IF NOT EXISTS short_summary TEXT";
if(mysqli_query($link, $query)) {
    echo "Column short_summary added successfully or already exists.";
} else {
    echo "Error adding column: " . mysqli_error($link);
}
?>
