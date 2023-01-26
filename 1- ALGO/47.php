<?php
/*
Supprimer un élément données dans un tableau dans d'entier. 
*/

// Creation tab et decla variables
$tab=array();
$valdonner = readline('Donnez taille du tableau ');
$indiceS = 0;

// rentrer valeurs dans tab
for ($i=0; $i <$valdonner ; $i++) { 
    $tab[$i]=readline('entrer vos valeurs ');

}

// recherche de la valeurs a supprimer par l'indice puis supressions de celle-ci
$indiceS= readline('Donnez valeurs a supprimer ');

for ($i=$indiceS; $i<count($tab)-1 ; $i++) { 
        $tab[$i]= $tab[$i+1];
  
}

// supression indice ou plus de valeurs pui affichage du tab
unset($tab[sizeof($tab)-1]);

for ($i=0; $i <sizeof($tab) ; $i++) { 
    echo $tab[$i].PHP_EOL;
}


?>