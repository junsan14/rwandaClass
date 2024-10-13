<?php

$filename = "exercise.txt";
$file = fopen($filename, "w+");
fwrite($file, "This is end of this session");
fclose($file);