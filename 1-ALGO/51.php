<?php
/*
Soit T un tableau de N réels. Ecrire un algo qui permet de calcuer les nimbre d'occrurrence d'un nombre X. 
*/

// initialisation variable et du tab
$tab=array(14,3,9,2,5,5,5,9);
$c=0;
$cd = readline('entrer valeur rechercher : ');

// boucle qui recherche l'occurence d'un nombre
for ($i=0; $i <count($tab) ; $i++) {
    if ($tab[$i]==$cd) {
        $c++;
    }
}
echo "nb d occurence du chiffre : $c ";


?>