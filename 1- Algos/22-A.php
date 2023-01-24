<?php
/*
Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmi ces 20 nombres.
*/

$max=0;

for ($i=0; $i <20 ; $i++) { 
    $nb = readline("Entrer valeurs ");
    if ($nb > $max) {
        $max = $nb ;
    }
}
echo "la valeur la plus grande est : ";
echo $max;

?>