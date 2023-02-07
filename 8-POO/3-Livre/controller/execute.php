<?php
include_once "../model/Livre.class.php";

$titre = readline("Donnez le titre : ");
$auteur = readline("Donnez l'auteur : ");
$prix = readline("Donnez le prix : ");

/*atribution de la classe a une variable puis affichage*/
$livre1 = new Livre($titre,$auteur,$prix);
$affichage = $livre1 ->afficher();
echo $affichage."\n";

$titre = readline("Donnez le titre : ");
$auteur = readline("Donnez l'auteur : ");
$prix = readline("Donnez le prix : ");
$livre2 = new Livre($titre,$auteur,$prix);
$affichage2 = $livre2 ->afficher();
echo $affichage2;


