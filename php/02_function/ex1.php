<?php

function taxPrice($price){
   $tax_rate = 0.18;
   //or $tax_rate = 18/100;
   echo $price*$tax_rate; 
}
taxPrice(4000);
