<?php
/**
 * Health Check Script for Finowings Website
 * This script checks if the website and database are responding correctly
 * Returns HTTP 200 if healthy, 503 if unhealthy
 */

// Set response headers
header('Content-Type: application/json');

$health_status = [
    'status' => 'healthy',
    'timestamp' => date('Y-m-d H:i:s'),
    'checks' => []
];

$overall_healthy = true;

// Check 1: Database Connection
try {
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$link) {
        throw new Exception('Database connection failed: ' . mysqli_connect_error());
    }
    
    // Test query
    $test_query = mysqli_query($link, "SELECT 1");
    if (!$test_query) {
        throw new Exception('Database query failed: ' . mysqli_error($link));
    }
    
    mysqli_close($link);
    $health_status['checks']['database'] = 'ok';
} catch (Exception $e) {
    $health_status['checks']['database'] = 'failed: ' . $e->getMessage();
    $overall_healthy = false;
}

// Check 2: Website Homepage
try {
    $ch = curl_init('https://www.finowings.com/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_NOBODY, true); // HEAD request only
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    curl_close($ch);
    
    if ($http_code >= 200 && $http_code < 400) {
        $health_status['checks']['website'] = 'ok (HTTP ' . $http_code . ')';
    } else {
        throw new Exception('Website returned HTTP ' . $http_code);
    }
} catch (Exception $e) {
    $health_status['checks']['website'] = 'failed: ' . $e->getMessage();
    $overall_healthy = false;
}

// Check 3: PHP Memory Usage
$memory_usage = memory_get_usage(true);
$memory_limit = ini_get('memory_limit');
$health_status['checks']['memory'] = [
    'usage' => round($memory_usage / 1024 / 1024, 2) . ' MB',
    'limit' => $memory_limit
];

// Check 4: Disk Space
$disk_free = disk_free_space('/');
$disk_total = disk_total_space('/');
if ($disk_free !== false && $disk_total !== false) {
    $disk_percent = round((($disk_total - $disk_free) / $disk_total) * 100, 2);
    $health_status['checks']['disk'] = [
        'free' => round($disk_free / 1024 / 1024 / 1024, 2) . ' GB',
        'used_percent' => $disk_percent . '%'
    ];
    
    if ($disk_percent > 90) {
        $health_status['checks']['disk'] = 'warning: ' . $disk_percent . '% used';
        $overall_healthy = false;
    }
}

// Set overall status
if (!$overall_healthy) {
    $health_status['status'] = 'unhealthy';
    http_response_code(503);
} else {
    http_response_code(200);
}

// Log health check result
$log_file = __DIR__ . '/health_check.log';
$log_entry = date('Y-m-d H:i:s') . ' - Status: ' . $health_status['status'] . PHP_EOL;
file_put_contents($log_file, $log_entry, FILE_APPEND);

echo json_encode($health_status, JSON_PRETTY_PRINT);
?>

SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';

/**
 * Health Check Script for Finowings Website
 * This script checks if the website and database are responding correctly
 * Returns HTTP 200 if healthy, 503 if unhealthy
 */

// Set response headers
header('Content-Type: application/json');

$health_status = [
    'status' => 'healthy',
    'timestamp' => date('Y-m-d H:i:s'),
    'checks' => []
];

$overall_healthy = true;

// Check 1: Database Connection
try {
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$link) {
        throw new Exception('Database connection failed: ' . mysqli_connect_error());
    }
    
    // Test query
    $test_query = mysqli_query($link, "SELECT 1");
    if (!$test_query) {
        throw new Exception('Database query failed: ' . mysqli_error($link));
    }
    
    mysqli_close($link);
    $health_status['checks']['database'] = 'ok';
} catch (Exception $e) {
    $health_status['checks']['database'] = 'failed: ' . $e->getMessage();
    $overall_healthy = false;
}

// Check 2: Website Homepage
try {
    $ch = curl_init('https://www.finowings.com/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_NOBODY, true); // HEAD request only
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    curl_close($ch);
    
    if ($http_code >= 200 && $http_code < 400) {
        $health_status['checks']['website'] = 'ok (HTTP ' . $http_code . ')';
    } else {
        throw new Exception('Website returned HTTP ' . $http_code);
    }
} catch (Exception $e) {
    $health_status['checks']['website'] = 'failed: ' . $e->getMessage();
    $overall_healthy = false;
}

// Check 3: PHP Memory Usage
$memory_usage = memory_get_usage(true);
$memory_limit = ini_get('memory_limit');
$health_status['checks']['memory'] = [
    'usage' => round($memory_usage / 1024 / 1024, 2) . ' MB',
    'limit' => $memory_limit
];

// Check 4: Disk Space
$disk_free = disk_free_space('/');
$disk_total = disk_total_space('/');
if ($disk_free !== false && $disk_total !== false) {
    $disk_percent = round((($disk_total - $disk_free) / $disk_total) * 100, 2);
    $health_status['checks']['disk'] = [
        'free' => round($disk_free / 1024 / 1024 / 1024, 2) . ' GB',
        'used_percent' => $disk_percent . '%'
    ];
    
    if ($disk_percent > 90) {
        $health_status['checks']['disk'] = 'warning: ' . $disk_percent . '% used';
        $overall_healthy = false;
    }
}

// Set overall status
if (!$overall_healthy) {
    $health_status['status'] = 'unhealthy';
    http_response_code(503);
} else {
    http_response_code(200);
}

// Log health check result
$log_file = __DIR__ . '/health_check.log';
$log_entry = date('Y-m-d H:i:s') . ' - Status: ' . $health_status['status'] . PHP_EOL;
file_put_contents($log_file, $log_entry, FILE_APPEND);

echo json_encode($health_status, JSON_PRETTY_PRINT);
?>

