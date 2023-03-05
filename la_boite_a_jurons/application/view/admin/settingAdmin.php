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

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Setting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/adminStyle.css">
  </head>
  <body id="targetBody">
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
    <span>
    
    <h3 style="margin-left: 100px">SETTING DE L'ADMIN</h3><br>
 
   </span>
  
    <div id="listusers" style="margin-left : 100px">
  
 

<?php
    foreach ($allUsers as $key => $user) {
?>
  <div class="card">
  <p id="propriete">Nom : <?= $user->getNom();?></p>
  <p id="propriete">Prénom : <?= $user->getPrenom();?></p>
  <p id="propriete">Date de naissance : <?= $user->getDateNaissance();?></p>
  <p id="propriete">privilege : 
    <?=
     ($user->getProfile()->getPrivilege()) ? "<button style='background-color : blue; color : white'>Admin</button><button>User</button>"
      : 
      "<button >Admin</button><button style='background-color : blue; color : white' >User</button>";?></p>
  <a href="./modifUser.php?login=<?php echo $user->getProfile()->getLogin(); ?>" >Modifier l'utilisateur</a>
</div>
<?php
    }

?>

  </div>


  </body>
</html>