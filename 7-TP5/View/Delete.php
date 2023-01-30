<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>tu est sur la page delete</p>
    <?php
            $servname = "localhost"; $dbname = "cours"; $user = "root"; $pass = "root";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                /*Supprime l'entrée avec l'id = 8 
                $user_id = 8;
                $req = $dbco->prepare("DELETE FROM users WHERE id = :user_id");
                $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                $req->execute();
                */
                
                //Supprime toutes les entrées de la table 
                $user_id = 0;
                $req = $dbco->prepare("DELETE FROM users WHERE id >= :user_id");
                $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                $req->execute();
                echo 'Données supprimées';
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
</body>
</html>
<?php

?>