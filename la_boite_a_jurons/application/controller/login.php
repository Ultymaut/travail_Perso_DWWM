<?php
require_once "../modele/service/UserDAO.php";
require_once "../modele/BDConnexion.php";

/**
 * Ctrl Login
 * Verifie si le user exist
 * Verifie ses droits est privilege et redirige vers les bonnes pages
 */
$login = $_POST["login"];
if (isset($conn)) {
    $userDAO = new UserDAO($conn);

    if (isset($_POST["login"])) {
        $user = $userDAO->getUsertByLogin($_POST["login"]);

        if (isset($user)) {
            session_start();
            $userProfile = $user->getProfile();
            $privilege = $userProfile->getPrivilege();
            $password = $userProfile->getMDp();
            if ($privilege == true && $_POST['password'] === $password) {
                header("Location:../view/admin/DashboardAdmin.php");
            } elseif ($privilege == false && $_POST['password'] === $password) {
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
    echo "Erreur de co.$login";
}

