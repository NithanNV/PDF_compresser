<?php
$applicationPath = 'C:\Users\Public\Desktop\PDF Compressor.lnk'; // Replace with the actual path to your application

// Use the appropriate command to open the application based on your operating system
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    // For Windows
    $command = "start \"My Application\" \"$applicationPath\"";
} else {
    // For Linux/Unix
    $command = "xdg-open \"$applicationPath\"";
}

// Execute the command
exec($command, $output, $returnCode);

if ($returnCode === 0) {
    echo "Application opened successfully!";
} else {
    echo "Error opening the application.";
}
?>
