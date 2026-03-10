 
 <?php 
 
// Load the database configuration file 
include_once 'dbconfig.php'; 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM payment ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "payment Data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('id', 'name', 'mobile', 'course', 'amount'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['id'], $row['name'], $row['mobile'], $row['course'], $row['amount']); 
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