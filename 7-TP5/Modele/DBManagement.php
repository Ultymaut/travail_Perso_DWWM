<?php
function readFileToArray(string $filePath): array
{
    $listStag = file($filePath, FILE_IGNORE_NEW_LINES);
    return $listStag;
}

// Fonction 2 = associer tab de f1 avec un tab en dur fais ulterieurement puis combine les 2
function generateStagPlaces(array $listStag, array $listPlaces): array
{
    $listStagPlaces = array_combine($listStag, $listPlaces);
    return $listStagPlaces;
}

function tabMulti(array $listStagPlaces): array
{
    $tableauMulti = [];
    $listStagPlaces = preg_replace("/\s+/", ",", $listStagPlaces);
    foreach ($listStagPlaces as $key => $value) {
        $line = $value . "," . $key;
        $tableauMulti[] = explode(",", $line);
    }
    return $tableauMulti;
}

function insertStagiaires(array $listStagPlaces): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    for ($i = 0; $i < count($listStagPlaces); $i++) {
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute($listStagPlaces[$i]);
    }
    return $status;
}

function deleteAllStagiaire(): bool
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    $sql = "DELETE FROM stagiaire";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}

function selectStagiaire(): array
{
    $host = 'localhost';
    $dbname = 'dwwm_2023';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM stagiaire";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}

function updateStagiaire(): bool
{
    $host = 'localhost';
    $dbname = 'dwwm_2023';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // modification des données
    $nom = $_POST['NOM'];
    $prenom = $_POST['PRENOM'];
    $id = $_POST['ID'];
    $sql = "UPDATE stagiaire SET NOM='$nom', PRENOM='$prenom' WHERE ID='$id'";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare($sql);
    $update = $stmt->execute();
    return $update;
}

function deleteStagiaire(): bool
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    $id = $_POST['ID'];
    $sql = "DELETE FROM stagiaire WHERE ID='$id'";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}
