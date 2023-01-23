<?php

//DEFINITION DU TABLEAU : CLASSE :
//On le récupère à partir d'un doc txt

// function readFileToArray($filePath): array{
//     $classe = array();
//     for ($i=1; $i <=16 ; $i++) { 
//         $classe2 = "eleve$i";
//         for ($j=1; $j <=16 ; $j++) { 
//             $$classe2[$i][$j] = array(file($filePath));
//         }
//     }
//     return $classe2;    
// }

// $classe_return = readFileToArray('Liste.txt');
// print_r($classe_return);
//DEFINITION DU NOMBRE DE PLACES : PLACES :
//On définie le tableau des places 
// $Places = array();
// for ($i=1; $i <=count($classe) ; $i++) { 
//     $Places[$i] = "Place_$i";
// }

// CA MARCHE --->
// for ($i=1; $i < 4; $i++) { 
//     $place = array("Place_$i");
//     $$place[$i] = array(1,2,3) ;
// }


// $place_asso = array();
// $place_asso = array_combine($$place[$i],$classe_return[$i]);

for ($i=1; $i <= 16; $i++) { 
    $place = array("Place$i");   
    for ($j=1; $j <=16 ; $j++) { 
        $$place[$i][$j] = "Place_$j";
    }    
}

$liste = array();
$liste = file('Liste.txt');
$position = -1;

for ($k=1; $k <=16 ; $k++) { 
    $classe = array ("Eleve$k");
    $position ++;
    for ($l=1; $l <=16 ; $l++) {
        $$classe[$k][$l] = $liste[$position];           
    }
}

for ($m=1; $m <=16 ; $m++) { 
    $var_dyna = array("place_asso_$m");
    for ($n=1; $n <=16 ; $n++) { 
        $$var_dyna[$m][$n] = array_combine("Place$m","Eleve$m");
    }
}



$json = json_encode($$var_dyna);
file_put_contents('C:\Users\makse\OneDrive\Bureau\Classe php\Json\save.json',$json);
print_r($$var_dyna);






?>