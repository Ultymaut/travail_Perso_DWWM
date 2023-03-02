<?php
require_once "C://xampp/htdocs/la_boite_a_jurons/application/modele/service/UserDAO.php";

require_once "../modele/BDConnexion.php";

/**
 * Ctrl Login
 * Verifie si le user exist
 * Verifie ses droits est privilege et redirige vers les bonnes pages
 */

session_start();
$login = $_POST["login"];
if (isset($conn)) {
    $userDAO = new UserDAO($conn);

    if (isset($_POST["login"])) {
        $user = $userDAO->getUsertByLogin($_POST["login"]);

        if (isset($user)) {
             


            $_SESSION['user']=$user;
            
            $userProfile = $user->getProfile();
            $privilege = $userProfile->getPrivilege();
            $password = $userProfile->getMDp();

            if ($privilege == true && $_POST['password'] === $password) {

                $_SESSION['login']=$_POST['login'];
                echo $_SESSION['nom'] = $user->getNom();
                echo $_SESSION['prenom']=$user->getPrenom();
                echo $_SESSION['naiss'] = $user ->getDateNaissance();

                header("Location:../view/admin/DashboardAdmin.php");
            } elseif ($privilege == false && $_POST['password'] === $password) {

                $_SESSION['login']=$_POST['login'];
                echo $_SESSION['nom'] = $user->getNom();
                echo $_SESSION['prenom']=$user->getPrenom();
                echo $_SESSION['naiss'] = $user ->getDateNaissance();

                header("Location:../view/user/DashboardUser.php");
            } else {
                echo "Mot de passe Inccorect";
            }
        } else {
            echo "Enregistrez vous au près du shérif";
        }

    } else {
        echo "NO DATA";
    }
} else {
    echo "Erreur de co.";
}

