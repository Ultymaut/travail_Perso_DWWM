<?php
/*
Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (on inclut cette fois le traitement du cas ou le produit peut etre nul).
saisir val , val1
if val * val1 > 0 = POSITIF 
    elseif val * val1 < 0 = Negatif
        else = valeur nul

*/

$val = readline('Saisir valeur');
$val1 = readline('Saisir valeur');


if ($val * $val1 > 0) {
    echo "postitif";
} elseif ($val * $val1 < 0) {
    echo "valeur negatif";
} else {
     echo "valeur de 0";
}

?>