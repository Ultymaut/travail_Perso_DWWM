<?php
include_once "../modele/BDConnexion.php";
require_once "../modele/service/UserDAO.php";
require_once "../modele/service/InfractionDAO.php";
require_once '../modele/Profile.class.php';
require_once '../modele/Infraction.class.php';
require_once '../modele/User.class.php';
require_once '../modele/service/HistoriqueDAO.php';
if (isset($conn)) {

//    $objetinf = new InfractionDAO($conn);
//    $objetuser = new UserDAO($conn);
//
//    $fait = $objetuser->getUsertByLogin("ulty");
//    $userfait=$objetinf->selectInfractionsByLibelee("gros juron");
//    $objetinf = new HistoriqueDAO($conn);
//    $objetinf->insertIntoFait($fait,$userfait);
    $vue= new HistoriqueDAO($conn);
    $affch=$vue->selectFaitByUser();
    var_dump($affch);
}


