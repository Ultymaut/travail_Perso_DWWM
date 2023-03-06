<?php

// Mounir MAADOUR


require_once "../../modele/service/UserDAO.php";
require_once "../../modele/BDConnexion.php";

session_start();

$userDAO = new UserDAO($conn);

$users = $userDAO->selectAllUser();
$allUsers = [];

foreach ($users as $key => $user) {
    $newUser = $userDAO->getUsertByLogin($user['login']);
    $allUsers[] = $newUser;
}

foreach ($allUsers as $key => $user) {
    if ($user->getProfile()->getLogin() == $_GET['login']) {
        $currentUser = $user;
    }
};

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USER PREVELGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/adminStyle.css">
</head>

<body id= "Dash">
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="./DashboardAdmin.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="./incrementationInfractions.php">
                    <i class="fa fa-bullseye fa-2x"></i>
                    <span class="nav-text">
                        Target
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="./settingAdmin.php">

                    <i class="fa fa-cog fa-2x"></i>
                    <span class="nav-text">
                        Settings prévélège
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="AjoutInfraction.php">
                    <i class="fa fa-puzzle-piece fa-2x"></i>
                    <span class="nav-text">
                        Ajouter Infraction
                    </span>
                </a>
            </li>
            <ul class="logout">
                <li>
                    <a href="../../controller/logoutController.php">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
    </nav>

    <div  style="margin-left : 100px">
        <h1 >MODIFIER L'UTILISATEUR</h1>
        <form method="post">

        <div id="infoG">
            <span id="info">
            <h5>INFO PERSONELLE </h5>
            <hr>
                <label id="nom"><code>NOM: </code><?= $currentUser->getNom(); ?></label><br>
                <label id="prenom"><code>PRENOM: </code> <?= $currentUser->getPrenom(); ?></label><br>
                <label id="dateNaissance"><code>DATE DE NAISSANCE: </code><?= $currentUser->getDateNaissance(); ?></label><br>
                <label id="login"><code>USERNAME: </code><?= $currentUser->getProfile()->getLogin(); ?></label><br>
                <label id="prevelge"><code>PRIVILEGE ACTUELLE:</code><?php echo ($currentUser->getProfile()->getPrivilege()) ? "Admin" : "User" ?></label>
            
            
            <h5 style="margin-top:35px;">CHANGER PRIVILEGE : </h5>
            <hr>
            <select class="form-select" name="privilege">
                <option>Admin</option>
                <option>User</option>
            </select>
            <button class="btn btn-warning" type="submit" style="margin-top: 10px;">SUBMIT</button>
            </span>  
            </span>
        </div>
        </form>

        <?php

        if (isset($_POST['privilege'])) {
            $userDAO->updatePrivilegeByLogin($currentUser->getProfile()->getLogin(), $_POST['privilege']);
            header('location: ./modifUser.php?login=' . $currentUser->getProfile()->getLogin());
            exit();
        }

        ?>