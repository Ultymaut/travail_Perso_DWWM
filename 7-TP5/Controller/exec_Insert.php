<?php
include "../Modele/DBManagement.php";

$pathfile = $_FILES['file']['tmp_name'];

$listStag = ReadFileToArray($pathfile);

$listPlaces=array("Place_1","Place_2","Place_3","Place_4","Place_5","Place_6","Place_7","Place_8","Place_9","Place_10","Place_11","Place_12","Place_13","Place_14","Place_15","Place_16");

$listStagPlaces= generateStagPlaces($listPlaces,$listStag);

$listStagPlaces = array();

$status = insertStagiaires($listStagPlaces);

if ($status) {
    echo "insert ok!!!";
} else {
    echo "insert KO!!!";
}

?>