<?php
include_once "../Model/Chocoblaste.class.php";
function InsertChocoblaste(Chocoblaste $chocoblaste):bool{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=Chocoblaste;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false ;
     
            $sql = "INSERT INTO Denver (nom, prenom, dateChoco) VALUES (?,?,?)";
            $stmt= $bdd->prepare($sql);
            $status = $stmt->execute([$chocoblaste->getNom(), $chocoblaste->getPrenom(), $chocoblaste->getdateChoco()]);
    
    
    return $status;
}

function ReadChocoblaste():array{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=Chocoblaste;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     
            $sql = "SELECT * FROM Denver";
            $stmt= $bdd->query($sql);
            $array = $stmt->fetchAll(PDO::FETCH_ASSOC);    
    
    return $array;
}

