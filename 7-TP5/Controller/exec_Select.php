<?php
include "../Modele/DBManagement.php";
session_start();
$_SESSION['stagiaire'] = selectStagiaire();
header('Location:../View/Select.php');

?>