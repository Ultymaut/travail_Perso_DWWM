<?php
include "../Modele/DBManagement.php";
deleteStagiaire();
session_start();
$_SESSION['stagiaire'] = selectStagiaire();
header('Location:../View/Delete.php');
?>