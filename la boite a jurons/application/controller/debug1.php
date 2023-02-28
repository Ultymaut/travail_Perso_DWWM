<?php
include_once "../modele/BDConnexion.php";
require_once "../modele/service/UserDAO.php";
require_once "../modele/service/InfractionDAO.php";
require_once '../modele/Profile.class.php';
require_once '../modele/Infraction.class.php';
if (isset($conn)) {
    $profile = new Profile("ulty","sdls");
    $user=new User("car","bapt","1998-10-30","0",$profile);
    $objetuser = new UserDAO($conn);
    $objetuser->insertUser($user);

}


