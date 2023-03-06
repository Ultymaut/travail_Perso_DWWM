<?php
require_once('../../modele/BDConnexion.php');
require_once('../../modele/service/UserDAO.php');
require_once('../../modele/service/InfractionDAO.php');
require_once('../../modele/service/HistoriqueDAO.php');
<<<<<<< HEAD:11-TP8/application/controller/Admin/AjoutInfractionControllerAdmin.php
// CARON
=======
// BAPTISTE
>>>>>>> ff3caee15e9bdf7ef4c9b05c61454ab625a52110:la_boite_a_jurons/application/controller/Admin/AjoutInfractionControllerAdmin.php
session_start();

if (isset($conn)) {
    $UserDAO = new UserDAO($conn);

    $userListe = $UserDAO->selectAllUser();
    $_SESSION['listeUser'] =$userListe;

    $infractionDao = new InfractionDAO($conn);

    $infListe = $infractionDao->selectAllInfraction();
    $_SESSION['infraction'] =$infListe;
    $listLibelee = array();

    if (isset($_POST['infractionLibel'], $_POST['log'])) {

        $historiqueFaitDAO = new InfractionDAO($conn);


        $infraction = $infractionDao->selectInfractionsByLibelee($_POST['infractionLibel']);
        $user = $UserDAO->getUsertByLogin($_POST['log']);
        $infractionDao->incrementeInfraction($user, $infraction);
        $UserDAO->updateUserSolde($user);
        echo "success";
     
    }else {
                echo "Utilisateur introuvable !";
             
            }
        } else {
        echo "no data";
    }