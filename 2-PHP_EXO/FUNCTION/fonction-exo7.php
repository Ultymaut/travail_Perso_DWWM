<?php
/*
écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur `false` et afficher le résultat de la fonction dans la console
*/

// fonction de booléen si il est vrai ou faux et le renvoie
function ouiNon(bool $param) : string{
    if ($param==true) {
        return 'oui'. "\n";
    } else {
        return 'non';
    }
}

// affiche resultat et met les valeure en dur 
echo ouiNon(true);
echo ouiNon(false);
?>