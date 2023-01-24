<?php

/*

traduire le bloc conditionnel `if` en bloc conditionnel `switch`

*/

$carte_fidelite = true;
$demande = 4;

$places_normales = rand(0, 10);
$places_carte_fidelite = rand(0, 5);

echo "carte_fidelite: $carte_fidelite\n";
echo "demande: $demande\n";
echo "places_normales: $places_normales\n";
echo "places_carte_fidelite: $places_carte_fidelite\n";

// if (($carte_fidelite && $demande <= $places_carte_fidelite)
//     || ($carte_fidelite && $demande <= $places_normales)
//     || (!$carte_fidelite && $demande <= $places_normales)) {
//     echo "la réservation est enregistrée\n";
// } else {
//     echo "il n'y a pas assez de places\n";
// }

// le switch verifie la disponibilite de place avec les carte de fidélité et les place normales
switch ($carte_fidelite) {
    case $demande <= $places_carte_fidelite :
        echo "la réservation est enregistrée\n";
        break;

    case $demande <= $places_normales:
            echo "la réservation est enregistrée\n";
        break;
    
    default:
        echo "il n'y a pas assez de places\n";
        break;
}