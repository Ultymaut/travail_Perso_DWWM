<?php
/*
• Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.
*/

$nb = readline("donner un nombre : ");
$fac = 1;

for ($i=1; $i <= $nb  ; $i++) { 
    $fac = $fac *$i;
    
}
echo "la factorielle est : ";
    echo $fac;



?>