<?php
require_once('../../modele/BDConnexion.php');
require_once('../../modele/service/UserDAO.php');
require_once('../../modele/service/InfractionDAO.php');
require_once('../../modele/service/HistoriqueDAO.php');
// KAOUTHAR
session_start();

if(isset($conn))
{
    $UserDAO = new UserDAO($conn);

    $userListe = $UserDAO->selectAllUser();
    $_SESSION['listeUser'] =$userListe;

    $infractionDao = new InfractionDAO($conn);

    $infListe = $infractionDao->selectAllInfraction();
    $_SESSION['infraction'] =$infListe;

    $userDAO = new UserDAO($conn);
    $user = $userDAO->getUsertByLogin($_SESSION['login']);
    $_SESSION['nomDash'] = $user->getNom();
    $_SESSION['prenomDash']=$user->getPrenom();
    $_SESSION['naissDash'] = $user ->getDateNaissance();

    $userDAO =  new UserDAO($conn);
    $historique= new HistoriqueDAO($conn);
    $_SESSION['user']=$user ;
    // $newSolde= $userDAO->updateUserSolde($user);
    // $user->setSolde( $newSolde);
    $solde = $user->getSolde();
    $infractionlist=$historique->selectFaitByUser($user);
    $json= array('soldeGlobale'=>$solde,'listeSoldeinfractions'=>$infractionlist);
  
    echo json_encode($json);
   
}else{
    echo "no connexion";
}



