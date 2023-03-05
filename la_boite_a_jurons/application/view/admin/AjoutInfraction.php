<!-- BATISTE -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout infraction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/adminStyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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

    <div class="d-grid gap-2 col-6 mx-auto">

        <form method="post" action="../../controller/Admin/CreationInfractionController.php">
        <div id="frm">
            <h1>Ajouter une infraction </h1>

            <div class="mb-3">
                <label for="libelee" class="form-label">Libelee</label>
                <input type="txt" class="form-control" placeholder="libelee" id="libelee" name="libelee">
               
            </div>

            <div class="mb-3">
                <label for="montant" class="form-label">montant </label>
                <input type="number" class="form-control" placeholder="montant" id="montant" name="montant">
                
                <div class="form-text">Merci de maintenir un environnement respectueux et harmonieux.
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Ajouter</button>

        </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>