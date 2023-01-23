<?php

/*
écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractère
- renvoit le paramètre en y ajoutant un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'` et afficher le résultat dans la console
*/

// fonction qui renvoie le message dans le parametre
function message(string $param): string{
    return $param;
}

// puis l'affiche ici 
echo message('Php 5.6')."\n";

?>