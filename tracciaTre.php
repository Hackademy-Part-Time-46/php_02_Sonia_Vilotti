<?php
$maxValue = 100;
for($i = 1; $i <= $maxValue; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo  'HACKADEMY' . "\n";
    }  
    elseif($i % 3 == 0){
        echo 'PHP' . "\n";
    }
    elseif($i % 5 == 0){
        echo 'JAVASCRIPT' . "\n";
    } 
    else{
        echo $i . "\n";
    }
};