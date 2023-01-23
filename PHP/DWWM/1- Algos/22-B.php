<?php
/*
Modifiez ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre.
*/

$max = 0;
$pos = 0;

for ($i=0; $i <20 ; $i++) { 
    $nb = readline("Entrer valeurs ");
    if ($nb > $max) {
        $max = $nb ;
        $pos = $i;
    }
}
echo "la valeur la plus grande est : ";
echo $max;
echo "\n";
echo "sa position est : ";
echo $pos;
?>