<?php
//Open for reading and writing. 
//If the file does not exist, it will be created. 
//If it exists, the file is truncated (emptied). 

$file = fopen("sample.txt","w+"); 
fwrite($file,"Level 4 Software Development");
fclose($file);