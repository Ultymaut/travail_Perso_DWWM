<?php

/*
écrire une fonction nommée `puissance` qui :

- prend un premier paramètres de type nombre entier
- prend un deuxième paramètres de type nombre entier ayant la valeur par défaut `2`
- élève le premier paramètre à la puissance du deuxième paramètre
- renvoit le résultat

appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console
appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console
*/

// fais le calcul et le renvoie
function puissance(int $nb1, int $nb2=2): int{ 
    return $nb1 ** $nb2;
}

// affiche le calcul et rentre les valeurs a faire en dur 
echo puissance(2)."\n";
echo puissance(2,3);

?>