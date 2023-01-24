<?php

// Écrivez une fonction qui affiche la date du jour
// NOTE : la date du jour peut être récupérée en faisant l'appel de fonction suivant :

$date = date('d-m-y h-i-s');

function date_du_jour(string $date) : string{
    return "On est le $date";
}

echo date_du_jour($date);