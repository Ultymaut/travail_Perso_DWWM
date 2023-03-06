<!-- KAOUTHAR -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DashboardUser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/userStyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body id= "Dash">
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="./DashboardUser.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="./updateInfraction.php">
                    <i class="fa fa-bullseye fa-2x"></i>
                    <span class="nav-text">
                        Target
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
    <div id="dashboardUser">
        <h1> BIENVENUE EN VILLE</h1>
        <div id="infoG">
            <span id="info">
            <h5>INFO PERSONELLE </h5>
                <hr>
                <?php session_start();
                ?>
                <label id="nom"><code>NOM: </code><?php echo $_SESSION['nomDash']; ?></label><br>
                <label id="prenom"><code>PRENOM: </code> <?php echo $_SESSION['prenomDash']; ?></label><br>
                <label id="dateNaissance"><code>DATE DE NAISSANCE: </code><?php echo $_SESSION['naissDash']; ?></label><br>
                <label id="login"><code>USERNAME: </code><?php echo $_SESSION['login'] ?></label>
            </span>
            <div class="solde" >
                <h5>SOLDE ACTUELLE </h5>
                <hr>
            
             <span id="solde">
            </span>

            </div>
            
            <span id="histoJ">
                <h5>HISTORIQUE INFRACTION </h5>
                <hr>

                <canvas id="myChart"></canvas>
            </span>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/Dash.js"></script>

</body>

</html>