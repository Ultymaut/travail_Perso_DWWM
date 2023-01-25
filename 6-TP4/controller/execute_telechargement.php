<?php
include_once('../modele/function.php');
session_start();

// Fichier CSV créer 
generateCsv('../modele/Save_Backup/Backup.json');

// Télechargement du fichier CSV
$file = "../modele/Save_Backup/DL.csv";
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

header('Location:../view/affichage.php');
