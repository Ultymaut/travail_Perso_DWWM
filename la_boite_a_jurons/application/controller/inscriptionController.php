<?php

session_start();
include_once "../modele/BDConnexion.php";
require_once "../modele/User.class.php";
require_once "../modele/service/UserDAO.php";

if (isset($conn)) {
// instantiation des méthode UserDao
$userManager = new UserDAO($conn);

// recuperation des donnees
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$dateNaissance = $_POST['dateNaissance'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];


// verification si le login est pris
$userExist = $userManager->getUsertByLogin($login);

// insertion USER :
if (!$userExist)
{
 $profile= new Profile($login,$mdp);
 $user = new User($nom,$prenom,$dateNaissance,0,$profile);
 $userManager->insertUser($user);
 header('Location:../view/user/DashboardUser.php');
}
else
{
  echo " il ne peut n'y avoir qu'un seul $login en ville, CHANGE IT NOW!!";
}
 }


  





  



