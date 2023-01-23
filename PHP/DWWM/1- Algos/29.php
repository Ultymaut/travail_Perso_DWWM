<?php
/*
Ecrire un algorithme qui demande un nombre , calcule et affiche la somme a l'aide du signe sigma.
*/

//Initialisation des valeurs
$val =readline('saisir valeur : ');
$som =0;

// boucle for afin de faire la fonctionalite du signe SIGMA (calcul en cube)
for ($i=1; $i <=$val ; $i++) { 
    $som = $som + ($i*$i*$i);
}

echo $som;



?>