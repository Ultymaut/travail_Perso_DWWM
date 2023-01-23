<?php
/*
Ecrire un algorithme qui demande un nombre à l'utilisateur et l'informe ensuite si ce nombre et positif ou négatif (on inclut cette fois le traitement du cas ou le nombre vaut zéro).
saisir val 
if val > 0 = POSITIF
    elseif val < 0 = NEGATIF
        else = valeur null
*/

$val = readline('Saisir valeur');

if ($val > 0) {
    echo "postitif";
} elseif ($val < 0) {
    echo "valeur negatif";
} else {
     echo "valeur de 0";
}

?>