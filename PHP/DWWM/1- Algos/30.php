<?php
/*
Donnez le resultat d'une multiplication de deux nombres en ne faisant que des additions
*/

//Initialisation des valeurs
$val1 =readline('saisir valeur 1 : ');
$val2 = readline('saisir valeur 2 : ');
$resu = 0;

//Boucle for pour faire le produits de 2 valeurs qu'avec des additions 
for ($i=0; $i < $val1 ; $i++) { 
    $resu = $resu + $val2;
      }  
         
      echo $resu;

?>