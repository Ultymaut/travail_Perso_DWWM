<?php 
/*
Réécrire l'algorithme précédent, mais cette fois-ci on ne connaît pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.
*/
$i = 1;
$max = 0;
$pos = 0;
$nb = readline("Entrer valeurs ");
while ($nb != 0) {
    $nb = readline("Entrer valeurs ");
    $i = $i+1;   

         if ($nb > $max) {
         $max = $nb ;
         $pos = $i;
       } 
    }

echo "la valeur la plus grande est : ";
echo $max;
echo "\n";
echo "sa position est : ";
echo $pos;


?>