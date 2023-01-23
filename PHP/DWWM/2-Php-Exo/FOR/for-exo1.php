<?php

/*

afficher les nombres pairs, entre 1 et 100

résultat attendu :

    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    ...

*/

// la boucle for va parcourir les nombres de 0 à 100 qui sont pairs
for ($i=0; $i < 100; $i++) { 
    if ($i%2==0) {
        echo $i."\n";
    }
}