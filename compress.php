<?php
require_once(__DIR__ . '../tcpdf.php');
// Include the TCPDF library

// Define the input and output file paths
$inputFile = 'input.pdf';
$outputFile = 'compressed.pdf';

// Create a new TCPDF instance
$pdf = new TCPDF();

// Set compression level (0 to 9, where 0 is no compression and 9 is maximum compression)
$pdf->setCompressionLevel(9);
// Add a page (if needed)
$pdf->AddPage();

// Read the input PDF and add it to the output PDF
$pdf->setSourceFile($inputFile);
$tplIdx = $pdf->importPage(1);
$pdf->useTemplate($tplIdx);

// Output the compressed PDF to a file
$pdf->Output($outputFile, 'F');

echo "PDF compression successful. Compressed file saved as $outputFile";
?>