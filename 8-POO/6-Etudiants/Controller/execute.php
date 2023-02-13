<?php
include_once "../Model/Etudiant.class.php";

for ($i=1; $i <=3 ; $i++) {
    $code = "Code_$i";
    $filiere = "Filiere_$i";
    $$code = readline("Quelle filiére : ");
    $$filiere = new Filiere($code);
}
for ($i=1; $i <=5 ; $i++) {
    $code = "Code_$i";
    $etudiants = "Etudiants_$i";
    $$code = readline("Votre nom : ");
    $$etudiants = new Filiere($code);
}