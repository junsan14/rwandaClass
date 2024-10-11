<?php

$filename = "exercise.txt";
$file = fopen($filename, "w+");
fwrite($file, "This is written by PHP");
fclose($file);