<?php
require_once "C://xampp/htdocs/la_boite_a_jurons/application/modele/service/UserDAO.php";

require_once "../modele/BDConnexion.php";

/**
 * Ctrl Login
 * Verifie si le user exist
 * Verifie ses droits est privilege et redirige vers les bonnes pages
 */
//BAPTISTE ET KATIA
session_start();
$login = $_POST["login"];
if (isset($conn)) {
    if (isset($_POST["login"])) {

        $userDAO = new UserDAO($conn);
        $user = $userDAO->getUsertByLogin($_POST["login"]);

        if (isset($user)) {



            $_SESSION['user'] = $user;

            $userProfile = $user->getProfile();
            $privilege = $userProfile->getPrivilege();
            $password = $userProfile->getMDp();

            if ($privilege == true && $_POST['pass'] === $password) {
                $userDAO = new UserDAO($conn);
                $user = $userDAO->getUsertByLogin($_POST["login"]);


                $_SESSION['login'] = $_POST['login'];
                $_SESSION['nomDash'] = $user->getNom();
                $_SESSION['prenomDash'] = $user->getPrenom();
                $_SESSION['naissDash'] = $user->getDateNaissance();
                $userListe = $userDAO->selectAllUser();
                $_SESSION['listeUser'] = $userListe;
                echo "admin";

                // header("Location:../view/admin/DashboardAdmin.php");
            } elseif ($privilege == false && $_POST['pass'] === $password) {
                $userDAO = new UserDAO($conn);
                $user = $userDAO->getUsertByLogin($_POST["login"]);


                $_SESSION['login'] = $_POST['login'];
                $_SESSION['nomDash'] = $user->getNom();
                $_SESSION['prenomDash'] = $user->getPrenom();
                $_SESSION['naissDash'] = $user->getDateNaissance();
                $userListe = $userDAO->selectAllUser();
                $_SESSION['listeUser'] = $userListe;
                // header("Location:../view/user/DashboardUser.php");
                echo "user";
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
