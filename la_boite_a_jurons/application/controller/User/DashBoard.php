<?php
require_once "../../modele/BDConnexion.php";
require_once "../../modele/service/InfractionDAO.php";

session_start();
$lib = $_GET['libelee'];
if (isset($conn))
{
    $infractionDAO = new InfractionDAO($conn);
        if (isset($_GET['libelee'])){
            $infrac=$infractionDAO->selectInfractionsByLibelee($lib);
        }
}