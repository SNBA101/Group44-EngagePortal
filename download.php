<?php
session_start();

// Check if the employee is authenticated
if (!isset($_SESSION['employee_authenticated']) || $_SESSION['employee_authenticated'] !== true) {
    header('HTTP/1.0 403 Forbidden');
    echo 'You are not authorized to access this page.';
    exit;
}

// Specify the path to the training materials folder
$training_materials_folder = 'training_materials/';

// Get the requested file name from the 'file' URL parameter
$requested_file = $_GET['file'];

if (empty($requested_file)) {
    header('HTTP/1.0 400 Bad Request');
    echo 'No file specified.';
    exit;
}

// Create the full file path
$file_path = $training_materials_folder . $requested_file;

// Check if the file exists
if (!file_exists($file_path)) {
    header('HTTP/1.0 404 Not Found');
    echo 'The requested file does not exist.';
    exit;
}

// Set the headers to prompt the download
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file_path));

// Read the contents of the file and send it to the user
readfile($file_path);
exit;
?>