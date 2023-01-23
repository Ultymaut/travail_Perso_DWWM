<?php
/*
Ecrivez un algorithme constituant un tableau, à partir de deux
tableaux de même longueur préalablement saisis. Le nouveau
tableau sera la somme des éléments des deux tableaux de départ.
*/

// Création de 2 tableaux
$tab1 = array(4,8,7,9,1,5,4,6);
$tab2 = array(7,6,5,2,1,3,7,4);


// fusion des 2 tableaux
for ($i=0; $i <8 ; $i++) { 
    $tab3[$i] = $tab1[$i] + $tab2[$i] ;
}

// affichage du tableaux final
for ($i=0; $i <8 ; $i++) { 
    echo $tab3[$i]." ";
}





?>