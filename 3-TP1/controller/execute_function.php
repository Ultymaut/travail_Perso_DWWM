<?php
include_once ('../modele/function.php');
session_start();
$_SESSION = placeStagRotate('../modele/Backup1.json');
header('Location:../view/affichage.php');
?>