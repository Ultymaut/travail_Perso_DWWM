<?php 
include_once "../DAO/Chocoblaste.DAO.php";
session_start();


// $nom = readline("Donnez votre Nom : ");
// $prenom = readline("Donnez votre Prénom : ");;
// $dateChoco = readline("Donnez votre Date de Chocoblastage : ");


// $choco->affichage();

$nom = $_POST['name'];
$prenom = $_POST['surname'];
$dateChoco = $_POST['dateChoco'];
$choco = new Chocoblaste($nom,$prenom,$dateChoco);
InsertChocoblaste($choco);




header('Location:../View/main.php');








?>