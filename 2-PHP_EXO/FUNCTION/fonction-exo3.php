<?php

/*
écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console
*/

// fonction qui fais le calcul et le renvoie
function add(int $nb1, int $nb2): int{
   return $nb1 + $nb2;    
}

// affiche le calcul et rentre les valeurs a faire en dur 
echo add(1,2);

?>