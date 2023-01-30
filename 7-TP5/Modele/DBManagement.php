<?php

function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}

// Fonction 2 = associer tab de f1 avec un tab en dur fais ulterieurement puis combine les 2
function generateStagPlaces(array $listStag, array $listPlaces): array
{
    $listStagPlaces = array_combine($listStag, $listPlaces);
    return $listStagPlaces;
}

function tabMulti(array $listStagPlaces) : array{
    $tableauMulti = [];
    $listStagPlaces = preg_replace("/\s+/",",",$listStagPlaces);
    foreach ($listStagPlaces as $key => $value) {
        $line = $value.",".$key;
        $tableauMulti [] = explode(",",$line);
    }
    return $tableauMulti;
}

function insertStagiaires(array $listStagPlaces):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
for ($i=0; $i <count($listStagPlaces) ; $i++) { 
    $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute($listStagPlaces[$i]);
}   
    return $status;
}


function selectStagiaire(){
    
}