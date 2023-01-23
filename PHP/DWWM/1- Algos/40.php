<?php
/*
Soit un tableau T à deux dimensions (12, 8) préalablement rempli
de valeurs numériques. Ecrire un algorithme qui recherche la plus
grande valeur au sein de ce tableau.
*/

// Valeurs de tableau rentrer en dur
$tab = array(array(1,2,3,4,5,6,7,8,9,10,11,12), array (1,2,3,4,5,6,7,8,9,10,11,12), array (1,2,3,4,5,6,7,8,9,10,11,12), array (1,2,3,4,5,6,7,8,9,10,11,12), array (1,2,3,4,5,6,7,8,9,10,11,12), array (1,2,3,4,5,6,7,8,9,10,11,12), array (1,2,3,4,5,6,7,8,9,10,11,12), array (1,2,3,4,5,6,7,8,9,10,11,12)) ;

// Initialisation variables
$pg=0;

// On recherche au sein du tableau de 8/12 la plus grande valeur
for ($i=0; $i <8 ; $i++) { 
   
    for ($j=0; $j <12 ; $j++) { 
        if ($tab[$i][$j]>$pg) {
            $pg = $tab[$i][$j];
        }
        
    }
}


echo 'la plus grande valeur est : ';
echo $pg;
















?>