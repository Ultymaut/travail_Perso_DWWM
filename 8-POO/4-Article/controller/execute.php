<?php
include_once "../model/Article.class.php";
/*Saisi de certaine donner par l'utilisateur*/
$nbArticle = readline("Donner le nombres d'articles : ");

$tauxTVA = readline("Donner le taux TVA pour tout les articles : ");
echo "Le taux est TVA est : $tauxTVA%"."\n";

/*Boucle afin de pouvoir redemander pour chaque article les infos utiles*/
for ($i=1; $i<=$nbArticle ; $i++) {
    $article = "Article $i";
    $reference = readline("Donner la référence du produit : ");
    $designation = readline("Donner la désignation du produit : ");
    $prixHT = readline("Donner le prixHT : ");
    if (empty($prixHT)){
        $prixHT = 0;
    }
/*Atribution de la classe à une variable puis affichage*/
    $$article = new Article($reference,$designation);
    $$article -> setTauxTVA($tauxTVA);
    $$article -> setPrixHT($prixHT);
    echo "Article $i \n";
    $$article -> afficherArticle();
    echo "\n";
}
