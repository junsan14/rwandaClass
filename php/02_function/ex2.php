<?php


function scoreAccess($score){
    if($score <50){
        return "Let's study harder";
    }elseif($score>=50 && $score<80){
        return "Pretty well";
    }elseif($score >= 80){
        return "Awesome";
    }
}
echo scoreAccess(80);