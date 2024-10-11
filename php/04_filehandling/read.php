<?php
$filename = "sample.txt";
$handle = fopen($filename, "r"); // Open the file in read mode 
// Read the file content
$content = fread($handle, filesize($filename)); 
echo $content; // Output the content fclose($handle); // Close the file


