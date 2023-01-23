<?php
/*
Tracer un triangle avec un nombre de lignes donnez par un utilisateur.
*/

//Initialisation des valeurs
$col = readline('saisir col ');
  
//compteurs pour le triangle afin que chaque ligne commence a 1 
$c =0;
$c1 = -1;

//boucle afin de créer un triangle
//1er for pour le vertical du triangle
//2eme for pour l'horizontal du triangle
for($i=0;$i<$col+1;$i++){
    $c= 0 ;
      $c1 = $c1 +1;
        echo "\n";  
    
        for($j=0;$j<=$c1 + 1;$j++){  
        $c = $c +1 ;  
          echo $c;
            }  
              }  

?>