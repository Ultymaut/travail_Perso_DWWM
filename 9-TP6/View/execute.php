<?php
include_once "../Model/Compte.class.php";
$nCompte = $this->autoIncrement();
echo "$nCompte";
$nom = readline("Donner le Nom : \n");
$prenom = readline("Donner le prénom : \n");
$tel = readline("Donner le numéro de téléphone : \n");
