<?php

/*
traduire les blocs conditionnels `if` en blocs conditionnels `switch`
*/

// bloc 1
// résultat attendu :
// c'est vrai
// if (true) {
//     echo "c'est vrai";
//     echo PHP_EOL;
// }

// le switch verifie la case suivante 
switch (true) {
    case true:
        echo "c'est vrai"."\n" ;
        break;
}


// bloc 2
// résultat attendu :
// différent de cent

// if ($i == 100) {
//     echo "égal à cent";
//     echo PHP_EOL;
// } else {
//     echo "différent de cent";
//     echo PHP_EOL;
// }
// le switch verifie la case suivante 

$i = 2;
switch (true) {
    case $i==100:
        echo "égal à cent";
        echo PHP_EOL;
        break;
    
    default:
    echo "différent de cent";
    echo PHP_EOL;
        break;
}

// bloc 3
// résultat attendu :
// êtes-vous un robot ?
// if ($password == "toto") {
//     echo "vous êtes loggé";
//     echo PHP_EOL;
// }
// else if ($password == "1234") {
//     echo "êtes-vous un robot ?";
//     echo PHP_EOL;
// } else if ($password = "abcd") {
//     echo "êtes-vous un robot ?";
//     echo PHP_EOL;
// } else {
//     echo "mauvais mot de passe";
//     echo PHP_EOL;
// }

$password = "toto";
// le switch verifie les case suivante 
switch (true) {
    case $password == "toto":
    echo "vous êtes loggé";
    echo PHP_EOL;
        break;

    case $password == "1234":
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
        break;

    case $password == "abcd":
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
        break;

    default:
    echo "mauvais mot de passe";
    echo PHP_EOL;
        break;
}

// bloc 4
// résultat attendu :
// $variable est un nomnbre entier
// if (is_string($variable)) {
//     echo "$variable est une chaîne de caractères";
//     echo PHP_EOL;
// } else if (is_float($variable)) {
//     echo "$variable est un nombre à virgule flottante";
//     echo PHP_EOL;
// } else if (is_array($variable)) {
//     echo "$variable est une liste ";
//     echo PHP_EOL;
// } else if  (is_int($variable)) {
//     echo "$variable est un nomnbre entier";
//     echo PHP_EOL;
// }

$variable = 1;
// le switch verifie les case suivante 
switch (true) {
    case is_string($variable):
        echo "$variable est une chaîne de caractères";
        echo PHP_EOL;
        break;

    case (is_float($variable)):
        echo "$variable est un nombre à virgule flottante";
        echo PHP_EOL;
        break;   

    case (is_array($variable)):
        echo '$variable est une liste ';
        echo PHP_EOL;                    
        break;   
        
    case (is_int($variable)):
        echo "$variable est un nomnbre entier";
        echo PHP_EOL;
        break;

}

// si je veux afficher un tab je reajour une boucle for
// case (is_array($variable)):
//     for ($i=0; $i <count($variable[$i]) ; $i++) { 
//     echo '$variable est une liste ';
//     echo PHP_EOL;                    
//     break; 
// }
    
