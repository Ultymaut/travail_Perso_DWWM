<?php
include_once "../model/Rectangle.class.php";

$longueur = readline("Donnez longueur");
$largueur = readline("Donnez largueur");

/*atribution de la classe a une variable puis affichage*/
$rectangle1 = new Rectangle($longueur,$largueur);
$affichage1 = $rectangle1 ->afficherRectangle();

echo $affichage1."\n";

$longueur = readline("Donnez longueur");
$largueur = readline("Donnez largueur");

$rectangle2 = new Rectangle($longueur,$largueur);
$affichage2 = $rectangle2 ->afficherRectangle();

echo $affichage2;
