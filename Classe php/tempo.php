<?php

// CA MARCHE ----->
// $Liste = "JB";

// for ($i=1; $i <=1 ; $i++) { 
//     $classe = array ("Eleve$i");
//     for ($j=1; $j <=16 ; $j++) {
//         $$classe[$i][$j] = array($Liste);           
//     }
// }




$liste = array();
$liste = file('Liste.txt');
$position = -1;

for ($i=1; $i <=16 ; $i++) { 
    $classe = array ("Eleve$i");
    $position ++;
    for ($j=1; $j <=16 ; $j++) {
        $$classe[$i][$j] = $liste[$position];           
    }
}

print_r($$classe);
$json = json_encode($$classe);
file_put_contents('C:\Users\makse\OneDrive\Bureau\Classe php\Json\save.json',$json);


?>