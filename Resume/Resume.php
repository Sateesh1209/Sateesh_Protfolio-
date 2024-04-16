<?php
// Path to the PDF file
$pdfFilePath = 'Sateesh-DE.pdf';

if (!file_exists($pdfFilePath)) {
    die("File not found. Please check the path.");
}

// Set headers for file download
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . basename($pdfFilePath) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($pdfFilePath));

// Clear the output buffer
ob_clean();
flush();

// Send the file to the browser
readfile($pdfFilePath);
exit;
?>
