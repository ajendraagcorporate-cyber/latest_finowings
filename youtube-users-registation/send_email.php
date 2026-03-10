<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$state = $_POST['state'];

$filePath = 'users.xlsx';

// Check if file exists
if(file_exists($filePath)){
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePath);
    $sheet = $spreadsheet->getActiveSheet();
    $row = $sheet->getHighestRow() + 1; // next empty row
} else {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    // Add headers
    $sheet->setCellValue('A1', 'Name');
    $sheet->setCellValue('B1', 'Email');
    $sheet->setCellValue('C1', 'Contact');
    $sheet->setCellValue('D1', 'City');
    $sheet->setCellValue('E1', 'State');
    $row = 2;
}

// Add data
$sheet->setCellValue('A'.$row, $name);
$sheet->setCellValue('B'.$row, $email);
$sheet->setCellValue('C'.$row, $contact);
$sheet->setCellValue('D'.$row, $city);
$sheet->setCellValue('E'.$row, $state);

// Save Excel
$writer = new Xlsx($spreadsheet);
$writer->save($filePath);

echo "Data saved successfully!";
?>
