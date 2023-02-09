<?php
include_once "../Model/Compte.class.php";
include_once "../Model/Client.class.php";

// Execute les différentes methode des classe Client et Compte 
echo "╔═══════════════════════════════════════════════════╗\n\n";
echo "Compte 1 : \n";
$cin = readline("Donnez votre numéro de CIN : ");
$nom = readline("Donnez votre Nom : ");
$prenom = readline("Donnez votre Prénom : ");
$tel = readline("Donnez votre numéro de Téléphone : ");
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗";
$compte = new Compte($cin,$nom,$prenom,$tel);
$affichage1 = $compte->affichage();
echo $affichage1;
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗\n\n";
$solde = readline("Entrez le montant à créditer : ");
$compte->crediter($solde);
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗";
$affichage1 = $compte->affichage();
echo $affichage1;
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗\n\n";
$solde = readline("Entrez le montant à débiter : ");
$compte->debiter($solde);
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗";
$affichage1 = $compte->affichage();
echo $affichage1;
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗\n\n";
echo "Compte 2 : \n";
$cin = readline("Donnez votre numéro de CIN : ");
$nom = readline("Donnez votre Nom : ");
$prenom = readline("Donnez votre Prénom : ");
$tel = readline("Donnez votre numéro de Téléphone : ");
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗";
$compte2 = new Compte($cin,$nom,$prenom,$tel);
$affichage2 = $compte2->affichage();
echo $affichage2;
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗\n\n";
echo "Créditer le compte 2 à partir du compte 1\n";
$solde = readline("Donnez le montant à créditer :");
$compte->crediterCpt($solde,$compte2);
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗\n\n";
echo "Débiter le compte 1 et créditer le compte 2\n";
$solde = readline("Donnez le montant à débiter :");
$compte2->debiterCpt($solde,$compte);
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗";
$affichage1 = $compte->affichage();
echo $affichage1;
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗";
$affichage2 = $compte2->affichage();
echo $affichage2;
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n";

echo "╔═══════════════════════════════════════════════════╗\n\n";
$total = $compte->getCode();
echo "Le nombre de compte crée est de : $total\n";
echo "\n";
echo "╚═══════════════════════════════════════════════════╝\n\n";