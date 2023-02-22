<?php
include_once "../modele/BDConnexion.php";
require_once "../modele/DbManagerInfractions.php";

$inf=new Infraction("petit j",0.1);

$DBInfraction = new DbManagerInfractions($conn);
$DBInfraction->InsertInfractions($inf);
var_dump($conn);