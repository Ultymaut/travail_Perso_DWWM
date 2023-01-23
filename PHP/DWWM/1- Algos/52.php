<?php


// Initialisation tab
$tab=array(14,3,9,2,5);

// Decla des compteurs
$c1 = 0;
$c2 = 0;

// Boucle qui recherche le nb de chiffre pairs/impairs
for ($i=0; $i <count($tab) ; $i++) { 
    if ($tab[$i]%2 == 0)
        $c1++;
    else {
        $c2++;
    }
}

echo 'le nombre de chiffre pairs : '.$c1;
echo PHP_EOL;
echo 'le nombre de chiffre impairs : '.$c2;
echo PHP_EOL;

?>