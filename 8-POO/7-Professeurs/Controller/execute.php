<?php
include_once "../Model/Personne.class.php";
include_once "../Model/Employe.class.php";
include_once "../Model/Professeur.class.php";
include_once "../Model/Etudiant.class.php";

        /*Execute ou l'on vas se servir des différentes classes afin de créer des données*/
echo "******************************************Etudiants 1******************************************\n\n\n";
$nom = readline("- Nom : ");
$prenom = readline("- Prénom : ");
$cne = readline("- CNE : ");
$etudiant1=new Etudiant($nom,$prenom,$cne);
echo "\n\n";

echo "******************************************Etudiants 2******************************************\n\n\n";
$nom = readline("- Nom : ");
$prenom = readline("- Prénom : ");
$cne = readline("- CNE : ");
$etudiant2=new Etudiant($nom,$prenom,$cne);
echo "\n\n";

echo "******************************************Employé 1******************************************\n\n\n";
$nom = readline("- Nom : ");
$prenom = readline("- Prénom : ");
$salaire = readline("- Salaire : ");
$employe1 = new Employe($nom,$prenom,$salaire);
echo "\n\n\n";

echo "******************************************Employé 2******************************************\n\n\n";
$nom = readline("- Nom : ");
$prenom = readline("- Prénom : ");
$salaire = readline("- Salaire : ");
$employe2 = new Employe($nom,$prenom,$salaire);
echo "\n\n\n";

echo "******************************************Professeur 1******************************************\n\n\n";
$nom = readline("- Nom : ");
$prenom = readline("- Prénom : ");
$salaire = readline("- Salaire : ");
$specialite = readline("- Specialités : ");
$prof1 = new Professeur($nom,$prenom,$salaire,$specialite);
echo "\n\n\n";

echo "******************************************Professeur 2******************************************\n\n\n";
$nom = readline("- Nom : ");
$prenom = readline("- Prénom : ");
$salaire = readline("- Salaire : ");
$specialite = readline("- Specialités : ");
$prof2 = new Professeur($nom,$prenom,$salaire,$specialite);
echo "\n\n\n";

echo "******************************************La liste des employes******************************************
\n\n
$employe1 
\n\n\n
$employe2 
\n\n";

echo "******************************************La liste des étudiants******************************************
\n\n
$etudiant1 
\n\n\n
$etudiant2
\n\n\n";

echo "******************************************La liste des professeurs******************************************
\n\n
$prof1 
\n\n\n
$prof2
\n\n";