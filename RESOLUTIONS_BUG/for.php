<?php


// 1. Écrivez une boucle `for` qui affiche les nombres entier de 1 à 10
echo "Petit 1".PHP_EOL;
for ($i=0; $i <=10 ; $i++) { 
    echo $i.PHP_EOL;
    
}
echo PHP_EOL;


// 2. Écrivez le code d'une boucle `for` qui affiche les valeurs du tableau suivant :

$liste = array(
    'foo',
    'bar',
    'baz'
);
echo "Petit 2".PHP_EOL;
for ($i=0; $i <count($liste) ; $i++) { 
    echo $liste[$i].PHP_EOL;
}