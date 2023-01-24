<?php
include_once ('../modele/function.php');
session_start();
$_SESSION = placeStagRotate('../modele/Backup.json');
header('Location:../view/affichage.php');

?>