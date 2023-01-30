<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../View/Select.css" media="screen,projection" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <h1 class="text-info">tu es sur la page select</h1>
    <?php
    $host = 'localhost';
    $dbname = 'dwwm_2023';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM stagiaire";
    try {
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->query($sql);
        if ($stmt === false) {
            die("Erreur");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    } ?>
<div class="position-absolute top-50 start-50 translate-middle " style="height: 50rem;">    
    <table >
        <thead>
            <tr class="p-3 mb-2 bg-info text-dark">
                <th class="rounded-start-3">ID</th>
                <th class="">NOM</th>
                <th class="">PRENOM</th>
                <th class="rounded-end-3">PLACE</th>
            </tr>
        </thead>
        <tbody class="">
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr class="">
                    <td class="bg-info-subtle text-dark rounded-start-3"><?php echo htmlspecialchars($row['ID']); ?></td>
                    <td class="bg-info-subtle text-dark "><?php echo htmlspecialchars($row['NOM']); ?></td>
                    <td class="bg-info-subtle text-dark "><?php echo htmlspecialchars($row['PRENOM']); ?></td>
                    <td class="bg-info-subtle text-dark rounded-end-3"><?php echo htmlspecialchars($row['PLACE']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>


</body>

</html>
<?php

?>