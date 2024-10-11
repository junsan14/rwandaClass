<?php

$arys = ["Apple"=>"2000", "Orange"=>"1500", "Banana"=>"4000"];
$sum = 0;
foreach($arys as $fruit=>$price){
    $sum = $sum + $price;
    echo $fruit."is ".$price."<br>";
}
echo "The sum is ".$sum;

?>