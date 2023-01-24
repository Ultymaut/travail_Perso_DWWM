<?php
include_once ('../modele/function.php');
session_start();
$_GET = downloadCSV($dl);

header('Location:../view/affichage.php');
?>