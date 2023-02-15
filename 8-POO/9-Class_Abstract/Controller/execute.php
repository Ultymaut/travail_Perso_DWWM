<?php
include_once "../Model/Developpeur.class.php";
include_once "../Model/Manager.class.php";

/*Insertion des données est creation des objet pour les deux classes enfants Developpeur est Manager avec demande de combien de dev et de manager*/
$nbM = readline("Nombre de manager : ");
echo "\n";
$nbD = readline("Nombre de développeur : ");
echo "\n\n";

for ($i=1; $i <=$nbM ; $i++) {
    echo "╠═══════Manager═══════╣\n";
    $mn="Manager_$i";
    $nom =readline("- Nom : ");
    $prenom = readline("- Prénom : ");
    $mail = readline("- E-Mail : ");
    $tel = readline("- Téléphone : ");
    $salaire = readline("- Salaire : ");
    $services=readline("- Service : ");
    $$mn = new Manager($nom,$prenom,$mail,$tel,$salaire,$services);
    echo "\n\n";
}

echo "\n\n";

for ($i=1; $i <=$nbD ; $i++) {
    echo "╠═══════Développeur═══════╣\n";
    $dv="Developpeur_$i";
    $nom =readline("- Nom : ");
    $prenom = readline("- Prénom : ");
    $mail = readline("- E-Mail : ");
    $tel = readline("- Téléphone : ");
    $salaire = readline("- Salaire : ");
    $specialite=readline("- Spécialités : ");
    $$dv = new Developpeur($nom,$prenom,$mail,$tel,$salaire,$specialite);
    echo "\n\n";
}

echo "\n\n╠═══════La liste des Personnes═══════╣\n\n";

/*Affichage du ou des manager(s)*/
for ($i=1; $i <=$nbM ; $i++) {
    $mn = "Manager_$i";
    $affichage = $$mn->afficherMan();
    echo "$affichage"."\n\n";
}

/*Affichage du ou des dév(s)*/
for ($i=1; $i <=$nbD ; $i++) {
    $dv = "Developpeur_$i";
    $affichage = $$dv->afficherDev();
    echo "$affichage"."\n\n";
}
