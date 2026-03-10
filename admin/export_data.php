<?php 
 
// Load the database configuration file 
include_once 'dbconfig.php'; 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM query ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Query-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Serial No', 'Query For', 'name', 'mobile', 'city'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['id'], $row['selectc'], $row['namec'], $row['mobile'], $row['city']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>