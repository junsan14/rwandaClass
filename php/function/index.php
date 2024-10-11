<?php

    $length = strlen("Hello World!"); 
    // Calculates the length of a string = 12

    $sum = array_sum([1, 2, 3, 4, 5]); 
    // Calculates the sum of array elements = 15

    $currentDate = date("Y-m-d"); 
    // Retrieves the current date = 2024-10-08
    


    function greet($name){
        echo "Mwaramuste, $name";
    }
    greet("jun");

    function factorial($args){
        if($args > 0){
            return $args*factorial($args -1);
        }else{
            return 1;
        }
    }
    echo factorial(5);
?>