<?php
// Central config से credentials लो
require_once __DIR__ . '/DLL/config.php';

// Hostinger पर backup का path dynamic रखें
$backup_dir  = $_SERVER['DOCUMENT_ROOT'] . '/backups/';
$backup_file = $backup_dir . 'finowings_backup_' . date('Y-m-d_H-i') . '.sql.gz';

// Backup directory बनाएं अगर नहीं है
if (!is_dir($backup_dir)) {
    mkdir($backup_dir, 0755, true);
}

// Command to export and compress (mysqldump)
$command = "mysqldump -u " . DB_USER . " -p'" . DB_PASS . "' " . DB_NAME . " | gzip > " . escapeshellarg($backup_file);

// Execute command
system($command, $output);

if (file_exists($backup_file)) {
    echo "<h1>✅ Backup Successful!</h1>";
    echo "<p>File: <b>" . basename($backup_file) . "</b></p>";
    echo "<p>Location: <b>$backup_file</b></p>";
} else {
    echo "<h1>❌ Backup Failed</h1>";
    echo "<p>Error Code: $output</p>";
    echo "<p>Hostinger पर 'mysqldump' command available नहीं हो सकता। hPanel में Backup tool use करें।</p>";
}
?>
