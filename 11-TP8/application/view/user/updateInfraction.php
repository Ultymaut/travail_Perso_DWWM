<!-- KAOUTHAR -->
<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boite a JURON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/userStyle.css">
</head>

<body id="targetBody">

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
    <div id="target">
        <div id="ReadListUser">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NOM & PRENOM</th>
                        <th scope="col">SOLDE</th>
                        <th scope="col">INFRACTION </th>
                        <th scope="col">INCREMENTER </th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    <?php
                        foreach ($_SESSION['listeUser'] as $key => $value){
                        echo"<tr>";
                        echo "<td id='log' value='".$value['login']."' >".$value['nom'].", ".$value['prenom']."</td>";
                        echo "<td>".$value['solde']." € </td>";
                        echo "<td>";
                        echo "<select id='infraction' class='form-select form-select-sm' aria-label='.form-select-sm example'>
                        <option selected>Choisire l'infraction </option>";
                        foreach ($_SESSION['infraction']  as $key => $value) {
                            echo "<option>".$value['libelee']." </option>";    
                        }
                       echo" </select> </td>";
                       echo "<td>";
                       echo "<button type='button' class='btn btn-danger' onclick='declare(this)'>Declare</button>";
                       echo "</td>";
                       echo"</tr>";

                    }     
                    ?>


               </tbody>
            </table>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/update.js"></script>
</body>

</html>