<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["path"]) ) {
       
        $path=$_POST["path"];
        $path2=$_POST["path2"];
        echo $path;
        $array = [$path,$path2];

    for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . " "; // Print each element of the array followed by a space

            $command = "pdfcompressor.exe -t scannedpdf -f $array[$i] -c 20 -o output";
            
            // Replace with your actual command
            echo $command;
            $output = exec($command);
    }
echo "<pre>$output</pre>";
    }
}?>
