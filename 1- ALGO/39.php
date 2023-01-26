<?php
/*
• Toujours et encore sur le même principe, écrivez un algorithme
permettant, à l'utilisateur de saisir les notes d'une classe. Le
programme, une fois la saisie terminée, renvoie le nombre de ces
notes supérieures à la moyenne de la classe.
*/


// Création du tableau
$tab = array();

// Initialisation des variables
$c =0;
$moy=0;
$som =0;

// On veut savoir combien de valeur le tableau va contenir
$val =readline('entrer la taille du tableau : ');


// Rentrer les valeurs dans le tableau
for ($i=0; $i <$val ; $i++) { 
    $n = readline('entrer une valeur : '); 
        $tab[$i] = $n;
        $som +=$n;
        }
        $moy += $som/$val;


// Boucle afin de mettre les valeurs au dessus de la moyenne dans un compteur 
for ($i=0; $i <count($tab) ; $i++) { 
    if ($tab[$i]>$moy) {
        $c++;
    }
}

echo 'la moyenne est : ';
echo $moy.PHP_EOL;
echo 'les notes au dessus de la moyenne sont : ';
echo $c;


?>