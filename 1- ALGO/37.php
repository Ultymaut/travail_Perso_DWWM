<?php
// • Ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs. Toutes les valeurs doivent être ensuite augmente dans le nouveau tableau sera affiché à l'écran.

// Création du tableau
$tab = array();

// On veut savoir combien de valeur le tableau va contenir
$val =readline('entrer nombre de valeur : ');

// Boucle pour remplir le tableau jusqu'au nombre de valeur donnez par l'utilisateur
for ($i=0; $i <$val ; $i++) { 
    $n = readline('entrer une valeur : ');
        $tab[$i] = $n+1;

}

// Boucle afin d'afficher le tableau
for ($i=0; $i <$val ; $i++) { 
    echo $tab[$i];
        echo PHP_EOL;
}


?>