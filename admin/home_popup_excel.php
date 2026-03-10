<?php 
 // Load the database configuration file 
include("config.php"); 
 
// Fetch records from database 
$query = "SELECT * FROM popup_enquiry ORDER BY id desc"; 
$result = mysqli_query($link, $query);
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Blog-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    echo $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Id', 'Name', 'Phone', 'Email', 'Enquiry Date'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while ($row = $result->fetch_assoc()) {
        $lineData = array($row['id'], $row['name'], $row['phone'], $row['email'], $row['created_date']); 
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