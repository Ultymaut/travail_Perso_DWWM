<?php
include_once "../Model/Etudiant.class.php";
/*Execute les class Etudiants qui est relier a la class Filiere et on lui rentre des valeurs*/
/*Filiere 1*/
$libele = readline("Entrez la 1ere filiére : ");
$filiere1 = new Filiere($libele);

/*Filiere 2*/
$libele = readline("Entrez la 2eme filiére : ");
$filiere2 = new Filiere($libele);

/*Filiere 3*/
$libele = readline("Entrez la 3eme filiére : ");
$filiere3 = new Filiere($libele);

/*etu 1*/
$nom = readline("entrer le nom de l'étudiant : ");
$prenom = readline("entrer le prenom de l'étudiant : ");
$dateNaiss = readline("entrer la date de naissance de l'étudiant : ");
$libele1 = $filiere1;
$etudiants1 =  new Etudiant($nom,$prenom,$dateNaiss,$libele1);

/*etu 2*/
$nom = readline("entrer le nom de l'étudiant : ");
$prenom = readline("entrer le prenom de l'étudiant : ");
$dateNaiss = readline("entrer la date de naissance de l'étudiant : ");
$libele2 = $filiere1;
$etudiants2 =  new Etudiant($nom,$prenom,$dateNaiss,$libele2);

/*etu 3*/
$nom = readline("entrer le nom de l'étudiant : ");
$prenom = readline("entrer le prenom de l'étudiant : ");
$dateNaiss = readline("entrer la date de naissance de l'étudiant : ");
$libele3 = $filiere2;
$etudiants3 =  new Etudiant($nom,$prenom,$dateNaiss,$libele3);

/*etu 4*/
$nom = readline("entrer le nom de l'étudiant : ");
$prenom = readline("entrer le prenom de l'étudiant : ");
$dateNaiss = readline("entrer la date de naissance de l'étudiant : ");
$libele4= $filiere3;
$etudiants4 =  new Etudiant($nom,$prenom,$dateNaiss,$libele4);

/*etu 5*/
$nom = readline("entrer le nom de l'étudiant : ");
$prenom = readline("entrer le prenom de l'étudiant : ");
$dateNaiss = readline("entrer la date de naissance de l'étudiant : ");
$libele5 = $filiere3;
$etudiants5 =  new Etudiant($nom,$prenom,$dateNaiss,$libele5);

/*Affichage des filiaires*/
echo  "Nos filiaire sont : \n";
echo "$filiere1\n$filiere2\n$filiere3\n\n\n";

/*Affichage des étudiants par filiaires*/
echo "Liste des étudiants par filiaire : \n\n";
echo "$filiere1 \n$etudiants1 \n$etudiants2 \n\n";
echo "$filiere2 \n$etudiants3\n\n";
echo "$filiere3 \n$etudiants4 \n$etudiants5\n\n";