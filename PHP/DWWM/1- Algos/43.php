<?php
/*
Un algorithme qui inverse un tableau
*/

// initialisation variable et du tab
$tab=array(14,3,9,2,5);
$temp=0;
$c = count($tab);

// boucle qui va chercher la 1ere valeurs est ensuite decale le reste 
for ($i=0; $i < $c ; $i++) { 
    $temp=$tab[$i];
    $tab[$i]=$tab[$c];
    $tab[$c]=$temp;
    $c--;
}

// affichage tab
for ($i=0; $i <count($tab) ; $i++) { 
    echo $tab[$i].PHP_EOL;
}








?>