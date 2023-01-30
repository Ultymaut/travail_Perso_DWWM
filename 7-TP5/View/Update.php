<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>tu est sur la page update</p>
</body>
</html>

<?php
            $servname = "localhost"; $dbname = "cours"; $user = "root"; $pass = "root";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $age = 31;
                $req = $dbco->prepare("UPDATE users SET age = :age");
                $req->bindParam(':age', $age, PDO::PARAM_INT);
                $req->execute();
                echo 'Données mises à jour';
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>

<?php
?>