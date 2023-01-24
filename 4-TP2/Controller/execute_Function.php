<?php
session_start();
include("../Modele/function.php");

$nom = $_GET['nom'];
$_SESSION ['nom'] = $nom;

$prenom = $_GET['prenom'];
$_SESSION ['prenom'] = $prenom;

$date_naiss = $_GET['Date_Naissance'];

$age = getAgeFromeDate($date_naiss);
$sexe = $_GET['genre'];
$renvoie = verifImpotParis ($age,$sexe);

if ($renvoie == true) {
    header("Location:../View/imposable.php");
} else {
    header("Location:../View/non_Imposable.php");
}
?>