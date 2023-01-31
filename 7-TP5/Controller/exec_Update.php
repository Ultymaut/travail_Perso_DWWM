<?php
include "../Modele/DBManagement.php";
updateStagiaire();
session_start();
$_SESSION['stagiaire'] = selectStagiaire();
header('Location:../View/Update.php');
?>