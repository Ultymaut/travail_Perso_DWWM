<?php
include_once "../modele/BDConnexion.php";
require_once "../modele/service/UserDAO.php";
require_once "../modele/service/InfractionDAO.php";
require_once "../modele/service/HistoriqueDAO.php";
require_once '../modele/Profile.class.php';
require_once '../modele/Infraction.class.php';
require_once '../modele/User.class.php';
require_once '../modele/service/HistoriqueDAO.php';


if (isset($conn)) {

//     $historiqueDAO= new HistoriqueDAO($conn);
//     $infractionDAO = new InfractionDAO($conn);
    $UserDAO = new UserDAO($conn);

    $infraction1= new Infraction("petitJ", 0.10);
    $infraction2= new Infraction("GrandJ", 0.20);
    $infraction3= new Infraction("ROT", 0.30);
    $infraction4= new Infraction("Retard", 0.40);
    $infraction5= new Infraction("Absence", 0.50);

    $infractions = array ($infraction1,$infraction2,$infraction4,$infraction5);

    

    $logins = array("KATIA59","MOUNIR16","LOK16","YARA");

    foreach ($logins as $key => $value) {
        $users[]= $UserDAO->getUsertByLogin($value);
    }

    $userKATIA = $UserDAO->getUsertByLogin("KATIA59");

    // $historiqueDAO->incrementeInfraction($userKATIA,$infraction2);
        $UserDAO->updateUserSolde($userKATIA);

   $listeUsers= $UserDAO->selectAllUser();

   var_dump( $listeUsers);


// $req2=$UserDAO->getConn()->prepare ("SELECT round(SUM(montant),2) as newSolde from fait f, users u, type_infractions t where f.id_user=u.id_user and f.id_user = :id_user GROUP by login;");
// $id=4;
// $req2->bindValue(':id_user', $id, PDO::PARAM_STR);
// $req2->execute();
// $ligne = $req2->fetch();

//     var_dump($ligne['newSolde']);

//     $req= $UserDAO->getConn()->prepare("UPDATE users SET solde = :solde where id_user=:id_user");

//         $req->bindValue(':solde', $ligne['newSolde'], PDO::PARAM_STR);
//         $req->bindValue(':id_user', $id, PDO::PARAM_STR);
        

//         $req->execute();



       


}


