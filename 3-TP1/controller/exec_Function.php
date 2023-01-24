<?php
require_once ('../modele/function.php');
session_start();
// Execute f1
$listStag = ReadFileToArray('../modele/listStag.txt');

// Rentre en dur le tab pour les places
$listPlaces=array("Place_1","Place_2","Place_3","Place_4","Place_5","Place_6","Place_7","Place_8","Place_9","Place_10","Place_11","Place_12","Place_13","Place_14","Place_15","Place_16");

// Execute f2
$listStagPlaces= generateStagPlaces($listPlaces,$listStag);

// Execute f3
$listPlaceStag=saveListStagToJson($listStagPlaces);

// Execute f4
// function randomizePlacesStag(array $listStagPlaces): array;

// Execute f5
$affichage = placeStagRotate($listPlaceStag);

// Affiche le tab associatif
// foreach ($affichage as $key => $value) {
//     echo "<tr><td> $key</td> <td>$value</td> </tr>".PHP_EOL;
// }
$_SESSION =  $affichage;

?>