<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../View/Insert.css" media="screen,projection" />
    <title>Document</title>
</head>
<body>
    <h1 class="text-align: center;">Tu est sur la page Insert</h1>

<div class="container">
        <div class="formulaire">
            <form enctype="multipart/form-data" action="../Controller/exec_Insert.php" method="post">
                <div class="center">
                <input class="file" name="file" type="file" />
                </div>
                <div class="button">
                    <input class="submit" name="submit" type="submit" value="valider" />
                </div>
            </form>
        </div>


</body>
</html>

<?php
?>