<?php
// Fonction 1 = creer tab a partir d'un fichier 
function readFileToArray(string $filePath) : array {
    $listStag= file($filePath,FILE_IGNORE_NEW_LINES); 
        return $listStag;
}

// Fonction 2 = associer tab de f1 avec un tab en dur fais ulterieurement puis combine les 2
function generateStagPlaces(array $listStag, array $listPlaces): array {
    $listStagPlaces = array_combine($listStag,$listPlaces);
        return $listStagPlaces;
}

// Fonction 3 = Sauvegarde du tableau fait par la f3 dans un fichier 
function saveListStagToJson(array $listStagPlaces): string{   
    if (!file_exists('../modele/Save_Backup')) {
        mkdir('../modele/Save_Backup');  
    }
    $contenu = "";
    foreach ($listStagPlaces as  $k => $v) {   
        $contenu.= "$k => $v".PHP_EOL;
    }
    $json_encode = json_encode($listStagPlaces, true);
    file_put_contents("../modele/Save_Backup\Backup.json",$json_encode,true);   
    $listPlaceStag = "../modele/Save_Backup\Backup.json";
    return $listPlaceStag;
}


// Fonction 4 : randomize les values du tab
function randomizePlacesStag(array $listStagePlaces) : array{
    $new = array();
    $values = array();
    $values = array_values($listStagePlaces);
    shuffle($values);

    $new = array_combine(array_keys($listStagePlaces),$values);
    return $new;
}

// Fonction 5 : On est iddentifie bien les Keys et les Values du tableau associatif puis ont va chercher la derniere values pour la remttre a l'index 1 ce qui décale tout de 1 puis combine les key est les values.
function placeStagRotate(string $listPlaceStag) : array{
    if (file_exists("../modele/Save_Backup\Backup1.json")) {
    $listPlaceStag = "../modele/Save_Backup\Backup1.json";
    }
    $json = file_get_contents($listPlaceStag);
    $listStagPlaces = json_decode($json, true);
    $key = array_keys($listStagPlaces);
    $value = array_values($listStagPlaces);
    $value_last = array_pop($value);
    array_unshift($value,$value_last);
    $listStagPlaces = array_combine($key,$value);
    $json = json_encode($listStagPlaces, true);
    file_put_contents("../modele/Save_Backup/Backup1.json",$json); 
    return $listStagPlaces;  
}
?>