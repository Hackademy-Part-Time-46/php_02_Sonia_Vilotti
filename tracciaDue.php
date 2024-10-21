<?php

$numbers = [
    10, 58, 46, 7, 29, 33, 21, 6, 90
];

$numPari = [];
for($i = 0; $i < count($numbers); $i++){
  if($numbers[$i] % 2 == 0){
    array_push($numPari, $numbers[$i]);
    
  };


}
 
$sum = array_sum($numPari);
$media = $sum / count($numPari);

print_r($media);



?>