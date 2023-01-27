<?php
include "../Modele/DBManagement.php";

$pathfile = $_FILES['file']['tmp_name'];

$listStag = ReadFileToArray($pathfile);

$listPlaces=array("Place_1","Place_2","Place_3","Place_4","Place_5","Place_6","Place_7","Place_8","Place_9","Place_10","Place_11","Place_12","Place_13","Place_14","Place_15","Place_16");

$listStagPlaces = array();

$listStagPlaces= generateStagPlaces($listPlaces,$listStag);

$tableauMulti = tabMulti($listStagPlaces);
// echo '<pre>';
// var_dump($tableauMulti);
// echo '</pre>';
$status = insertStagiaires($tableauMulti);

if ($status) {
   header("Location:../View/Index.html");
} else {
    echo "Données non envoyées";
}


?>