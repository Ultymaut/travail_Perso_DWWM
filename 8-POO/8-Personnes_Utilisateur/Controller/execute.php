<?php
include_once "../Model/Personne.class.php";
include_once "../Model/Profil.class.php";
include_once "../Model/Utilisateur.class.php";

$nom = readline("Nom : ");
$prenom= readline("Prénom : ");
$mail = readline("Mail : ");
$tel = readline("Tel : ");
$salaire = readline("Salaire : ");
$login = readline("Login : ");
$passsword = readline("MDP : ");
$services = readline("Service : ");
$mn= new Utilisateur($nom, $prenom, $mail, $tel, $salaire,$login,$passsword,$services);
echo $mn;