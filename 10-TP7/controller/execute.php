<?php
include_once "../model/Employe.class.php";

//Execute qui utlise la classe Employé est ses méthodes
echo "╔═══════════════════════════════════════════════════╗\n";
echo "║\n";
$matricule = readline("╠Donner le matricule : ");
echo "║\n";
$nom = readline("╠Donner le nom : ");
echo "║\n";
$prenom = readline("╠Donner le prenom : ");
echo "║\n";
$dateNaiss = readline("╠Rentrer votre date de naissance (jj-mm-aaaa): ");
echo "║\n";
$dateEmbauche = readline("╠Donner votre date d'embauche (jj-mm-aaaa): ");
echo "║\n";
$salaire = readline("╠Donner votre salaire : ");
echo "║\n";
$employe = new Employe($matricule,$nom,$prenom,$dateNaiss,$dateEmbauche,$salaire);
echo "╚═══════════════════════════════════════════════════╝\n";

$employe -> afficherEmployer();

echo "╔═══════════════════════════════════════════════════╗\n";
echo "║\n";
echo "╠Après application de l'augmentation du salaire \n";
echo "║\n";
echo "╚═══════════════════════════════════════════════════╝\n";
$employe->augmentationSalaire();
$employe -> afficherEmployer();
