<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../View/style2.css" media="screen,projection" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bcg">
    <?php session_start(); ?>
    <h1>Dommage tu dois payer <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?></h1>
    <div class="pos">
        <img src="../Assets/pasouf.gif" alt="">
    </div>
</body>

</html>