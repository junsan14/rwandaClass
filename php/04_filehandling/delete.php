<?php
$file= "sample2.txt"; 
if (file_exists($file)) { 
    unlink($file); 
    echo "File deleted successfully.";
} else {
     echo "File does not exist.";
}