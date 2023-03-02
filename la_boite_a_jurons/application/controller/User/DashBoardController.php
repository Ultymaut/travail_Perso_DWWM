<?php
require_once('../../modele/BDConnexion.php');
require_once('../../modele/service/UserDAO.php');
require_once('../../modele/service/InfractionDAO.php');

session_start();

if(isset($conn))
{
    
    $userDAO =  new UserDAO($conn);
    $user = $_SESSION['user'];
 
    
    echo $user->getSolde();


}else{
    echo "no connexion";
}

