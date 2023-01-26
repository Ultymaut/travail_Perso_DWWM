<?php
/*
• Ecrivez un algorithme permettant, toujours sur le même principe, à
l'utilisateur de saisir un nombre déterminé de valeurs. Le
programme, une fois la saisie terminée, renvoie la plus grande
valeur en précisant quelle position elle occupe dans le tableau. On
prendra soin d'effectuer la saisie dans un premier temps, et la
recherche de la plus grande valeur du tableau dans un second
temps.
*/

// Création du tableau
$tab = array();

// Initialisation des variables
$pg =0;
$pos = 0;
$c=0;
// On veut savoir combien de valeur le tableau va contenir
$val =readline('entrer la taille du tableau : ');

// Boucle pour remplir le tableau jusqu'au bombre de valeur donnez par l'utilisateur
for ($i=0; $i <$val ; $i++) { 
    $n = readline('entrer une valeur : ');
        $tab[$i] = $n;
            
    }

// Recherche avec une boucle au sein du tableau afin de trouver le plus grand et sa position 
for ($i=0; $i <count($tab)  ; $i++) { 
    $c+=1;

if ($tab[$i]>$pg) {
    $pg= $tab[$i];
        
            $pos = $c;

} else {
    $pg=$pg;
        $c+=1;
}

}

    
echo "La valeur la plus grande est : ";
echo $pg.PHP_EOL;
echo "Sa position est : ";
echo $pos;



?>