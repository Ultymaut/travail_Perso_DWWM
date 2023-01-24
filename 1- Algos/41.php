<?php
/*
• Ecrire l'algorithme effectuant le décalage des éléments d'un
tableau.
*/

// Creation tab et decla valeurs
$tab = array('D','E','C','A','L','A','G','E');
$temp=$tab[0];

// La boucle commence en dehors de $i est decale la 1ere valeurs
for ($i=0; $i < count($tab)-1 ; $i++) { 
    $tab[$i] = $tab[$i+1];
}

$tab[7]=$temp;

// Affichage tab
for ($i=0; $i <count($tab) ; $i++) { 
    echo $tab[$i];
}

?>