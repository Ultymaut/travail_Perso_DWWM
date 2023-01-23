<?php

/*

simplifier les blocs conditionnels `if` imbriqués en utilisant l'opérateur booléen `&&`

*/
// if ($billet == TICKET_NORMAL) {
//     echo "en règle\n";
// } else if ($billet == TICKET_ZAP) {
//     if ($stations <= ZAP_MAX) {
//         echo "en règle\n";
//     } else {
//         echo "en fraude\n";
//     }
// } else {
//     echo "en fraude\n";
// }

define('ZAP_MAX', 1);
define('TICKET_AUCUN', 0);
define('TICKET_NORMAL', 3);
define('TICKET_ZAP', 1);

$billet = TICKET_ZAP;
$stations = 3;

echo "billet: $billet\n";
echo "stations: $stations\n";

// le if verifie si le billet est la station sont en regle ou non
if ($billet == TICKET_NORMAL) {
    echo "en règle\n";
} else if ($billet == TICKET_ZAP && $stations <= ZAP_MAX) { 
    } else {
        echo "en fraude\n";
    }



