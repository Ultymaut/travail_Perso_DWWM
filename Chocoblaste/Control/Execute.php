<?php 
include_once "../DAO/Chocoblaste.DAO.php";



$nom = readline("Donnez votre Nom : ");
$prenom = readline("Donnez votre Prénom : ");;
$dateChoco = readline("Donnez votre Date de Chocoblastage : ");
$choco = new Chocoblaste($nom,$prenom,$dateChoco);
$choco->affichage();
InsertChocoblaste($choco);







?>