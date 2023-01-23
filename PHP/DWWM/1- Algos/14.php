<?php
/*
Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres.
saisir val et val1
if val * val1 > 0 = POSITIF
else =Negatif
*/

$val = readline('Saisir valeur');
$val1 = readline('Saisir valeur');


if ($val * $val1 > 0) {
    echo "postitif";
} else {
    echo "negatif";
};

?>