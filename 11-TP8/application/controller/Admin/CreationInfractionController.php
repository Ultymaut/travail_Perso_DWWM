<?php

include_once "../../modele/BDConnexion.php";
require_once "../../modele/Infraction.class.php";
require_once "../../modele/service/InfractionDAO.php";
// BATIST

if (isset($conn)) {
// instantiation des méthode InfractionDAO
    $infractionManager = new InfractionDAO($conn);

// recuperation des donnees
    $libelee = $_POST['libelee'];
    $montant = $_POST['montant'];

// verification si le libelee est pris
    $infractionExist = $infractionManager->selectInfractionsByLibelee($libelee);

// insertion infraction :
    if (isset($infractionExist)) {
        echo "Cette infraction de type : $libelee, existe déja";

    } else {
        $infraction = new Infraction($libelee, $montant);
        $infractionManager->insertInfractions($infraction);

        header('Location:../../view/admin/AjoutInfraction.php');
    }
}