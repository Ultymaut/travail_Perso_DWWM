<?php

/*
écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`
*/

// fonction qui envoie le message grace au parametres
function message(string $param): void {
    echo $param. "\n";
}

message('Php 5.6');

?>