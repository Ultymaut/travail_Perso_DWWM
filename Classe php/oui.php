<?php

// function randomGen($min, $max, $quantity) {
//     $numbers = range($min, $max);
//     shuffle($numbers);
//     return array_slice($numbers, 0, $quantity);
// }

// print_r(randomGen(0,20,20));

$liste = array();
$liste = file('Liste.txt');
$position = -1;

for ($i=1; $i <= 16; $i++) { 
    $place = array("Place$i");  
    $classe = array ("Eleve$i");
    $position ++; 
    $var_dyna = array("place_asso_$i");
    for ($j=1; $j <=16 ; $j++) { 
        $$place[$i][$j] = "Place_$j";
        $$classe[$i][$j] = $liste[$position];           
    }    
}

for ($i=1; $i <=16 ; $i++) { 
    $$var_dyna[$i] = array_combine($$place[$i],$$classe[$i]);
}




print_r($$var_dyna);





?>