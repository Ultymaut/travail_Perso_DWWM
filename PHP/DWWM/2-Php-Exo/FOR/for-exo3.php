<?php

/*

afficher les nombres non divisibles par 3, entre 1 et 100

résultat attendu :

    1
    2
    4
    5
    7
    8
    10
    11
    13
    14
    ...

*/

// la boucle for va parcourir les nombres de 0 à 100 qui ne sont pas pairs
for ($i=0; $i < 100; $i++) { 
    if ($i%3!=0) {
        echo $i."\n";
    }
}