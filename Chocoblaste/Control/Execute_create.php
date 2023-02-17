<?php 
include_once "../model/InsertChocoblaste.class.php";
session_start();

// $nom = readline("Donnez votre Nom : ");
// $prenom = readline("Donnez votre Prénom : ");;
// $dateChoco = readline("Donnez votre Date de Chocoblastage : ");


// $choco->affichage();

$nom = $_POST['name'];
$prenom = $_POST['surname'];
$dateChoco = $_POST['dateChoco'];
$choco = new InsertChocoblaste($nom,$prenom,$dateChoco);
$choco ->InsertChocoblaste($choco);
header('Location:../View/index.php');
