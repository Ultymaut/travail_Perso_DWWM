<?php
/*
Ecrivez un algorithme calculant la somme des valeurs d'un tableau
(on suppose que le tableau a été préalablement saisi).
*/

// Création d'un tableu
$tab = array(10,20,15,17,13,2);
$som = 0 ;

// boucle afin de faire la somme 
for ($i=0; $i < 6; $i++) { 
    $som = $som + $tab[$i];
}

echo $som;






?>