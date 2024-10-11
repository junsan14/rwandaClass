<?php

//$name = $_POST["name"];
//$email = $_POST["email"];

//echo "Your name is $name and your email address is $email";


function tax($tax){
    $price = 1000;
    echo $price*$tax;
}

tax(0.1);