<?php
include_once "../Model/Cercle.class.php";
/*Appel des classe pour résoudre les problèmes poser*/

$abscisse = readline("Donner l'abscisse : ");
$ordonne = readline("Donner l'ordonné : ");
$r = readline("Donner le rayon : ");

$cercle = new Cercle($abscisse,$ordonne,$r);
$affichage = $cercle -> afficherCercle();
echo $affichage;

$x = readline("X : ");
$y = readline("Y : ");
$point = new Point($x,$y);
$affichage = $point-> afficher();
$appartient = $cercle->appartient($x,$y);
echo $appartient;





