<?php


//r: Open for reading only. The file pointer is placed at the beginning of the file.
//w: Open for writing only. If the file does not exist, it will be created. If it exists, the file is truncated (emptied). The file pointer is placed at the beginning of the file.
//a: Open for writing only. If the file does not exist, it will be created. If it exists, the file pointer is placed at the end of the file. New data will be appended to the existing data.
//x: Open for exclusive writing. Creates a new file. If the file already exists, the fopen() call will fail.
//r+: Open for reading and writing. The file pointer is placed at the beginning of the file.
//w+: Open for reading and writing. If the file does not exist, it will be created. If it exists, the file is truncated (emptied). The file pointer is placed at the beginning of the file.
//a+: Open for reading and writing. If the file does not exist, it will be created. If it exists, the file pointer is placed at the end of the file.
//x+: Open for reading and writing. Creates a new file. If the file already exists, the `fopen()` call will fail.


$filename = "test.html";
$mode = "r";
$handle = fopen($filename, $mode); 

if ($handle === false) { 
    echo "Failed to open the file.";
} else { 
    fclose($handle);
}
