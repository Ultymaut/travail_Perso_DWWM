<?php
//KATIA
$option = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
);

try {
    // $conn est un objet qui représente la connexion à la base de donnée
    $conn = new PDO ('mysql:host=localhost;dbname=boite_a_juron', 'root', '', $option);

} catch (PDOException $e) {
    exit ("Erreur lors de la connexion à la BD: " . $e->getMessage());
}
