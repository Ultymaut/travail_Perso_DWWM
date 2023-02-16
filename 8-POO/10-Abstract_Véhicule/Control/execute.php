<?php
include_once "../Model/Voiture.class.php";
include_once "../Model/Camion.class.php";

/*Création des objet voiture est camion */

$v1 = new Voiture("17/07/2022","Peugeot_308",19999.99);
echo $v1."\n";
$v1->accelerer();
$v1->demarrer();
echo "\n\n";

$v2 = new Voiture("17/07/2007","Renault_clio",3999.99);
echo $v2."\n";
$v2->accelerer();
$v2->demarrer();
echo "\n\n";

$c1 = new Camion("22/05/2012","Renault",10299.99);
echo $c1."\n";
$c1->accelerer();
$c1->demarrer();
echo "\n\n";

$c2 = new Camion("08/03/2009","Ford",6587.95);
echo $c2."\n";
$c2->accelerer();
$c2->demarrer();
echo "\n\n";