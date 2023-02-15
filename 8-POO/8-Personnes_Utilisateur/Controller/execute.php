<?php
include_once "../Model/Personne.class.php";
include_once "../Model/Profil.class.php";
include_once "../Model/Utilisateur.class.php";

$nbProfil=readline("Donnez le nombre de profil a créer : ");

/*Rentrer les données d'un certains nombres d'utilisateur est de profile*/
for ($i=1; $i <=$nbProfil ; $i++) {
    $mn = "Profil_$i";
    $profil ="Statuts_$i";
    $nom = readline("Nom : ");
    $prenom= readline("Prénom : ");
    $mail = readline("Mail : ");
    $tel = readline("Tel : ");
    $salaire = readline("Salaire : ");
    $login = readline("Login : ");
    $passsword = readline("MDP : ");
    $services = readline("Service : ");

    $code = readline("Code du service : ");
    $libelle = $services;
    $$profil = new Profil($code,$libelle);
    $$mn= new Utilisateur($nom, $prenom, $mail, $tel, $salaire,$login,$passsword,$services,$$profil);
}
/*Affichage des données des Objet Utilisateur est Profil*/
echo "\n\nLa liste des profils : \n\n";

for ($i=1; $i <=$nbProfil ; $i++) {
    $mn = "Profil_$i";
    $affichage = $$mn->afficher();
    echo "$affichage"."\n\n";
}

echo "La liste du ou des Manager(s): \n\n";

for ($i=1; $i <=$nbProfil ; $i++) {
    $mn = "Profil_$i";
    $profil ="Statuts_$i";
    if ($$profil->getLibelle() == "Manager"){
    $affichage = $$mn->afficher();
    echo "\n\n".$affichage;
    }
}
