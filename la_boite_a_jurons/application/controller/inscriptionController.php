<?php
// MOUNIR & LUCA
session_start();
include_once "../modele/BDConnexion.php";
require_once "../modele/User.class.php";
require_once "../modele/service/UserDAO.php";

if (isset($conn)) {
    
// instantiation des méthode UserDao
    $userManager = new UserDAO($conn);

    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $userExist = $userManager->getUsertByLogin($login);

        if ($login == $userExist->getProfile()->getLogin()) {
            echo "$login  est déjà pris !";
        } else {
            // recuperation des donnees
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $dateNaissance = $_POST['dateNaissance'];
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
        
        // verification si le login est pris
            $userExist = $userManager->getUsertByLogin($login);
        
        // insertion USER :
            if (!$userExist) {
                $profile = new Profile($login, $mdp);
                $user = new User($nom, $prenom, $dateNaissance, 0, $profile);
                $userManager->insertUser($user);
                header('Location:../view/index.html');
        }
    }
}
}





  





  



