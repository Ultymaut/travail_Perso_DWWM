<?php
include_once "../modele/BDConnexion.php";
require_once "../modele/DbManagerInfractions.php";

$inf=new Infraction("petit j",0.1);

if (isset($conn)) {
    $DBInfraction = new DbManagerInfractions($conn);
    $DBInfraction->InsertInfractions($inf);
}

/*$tabinf = $DBInfraction->SelectInfractions($inf);

var_dump($tabinf);*/

echo $inf->getId_infraction();
