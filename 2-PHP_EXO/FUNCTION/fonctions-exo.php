<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

// fonction afin de calculer le nombre de place de parkings restantes
function calcul_place(int $nombre_places_parking, int $nombres_voitures): int{
    return  $nombre_places_parking-$nombres_voitures ;
}

// valeur de places en dur puis nombre de voitures random
$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

// affichage
echo "Nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "Nombres_voitures = $nombres_voitures";
echo PHP_EOL;
echo "Il y a ".calcul_place($nombre_places_parking,$nombres_voitures)." places_libres";