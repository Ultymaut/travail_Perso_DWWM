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
<?php session_start() ?>

<body>
    <header>
        <h1 class="text-info bg-dark h-50 opacity-75"> <a href="../View/index.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="d-flex justifiy-content-start me-5">
                    <path d="M11.03 2.59a1.501 1.501 0 0 1 1.94 0l7.5 6.363a1.5 1.5 0 0 1 .53 1.144V19.5a1.5 1.5 0 0 1-1.5 1.5h-5.75a.75.75 0 0 1-.75-.75V14h-2v6.25a.75.75 0 0 1-.75.75H4.5A1.5 1.5 0 0 1 3 19.5v-9.403c0-.44.194-.859.53-1.144ZM12 3.734l-7.5 6.363V19.5h5v-6.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 .75.75v6.25h5v-9.403Z"></path>
                </svg></a>tu es sur la page select</h1>
    </header>
    <div class="position-absolute top-50 start-50 translate-middle h-75 d-inline-block">
        <table class="h-100">
            <thead>
                <tr class="p-3 mb-2 bg-info text-dark opacity-75">
                    <th class="rounded-start-3">ID</th>
                    <th class="">NOM</th>
                    <th class="">PRENOM</th>
                    <th class="rounded-end-3">PLACE</th>
                </tr>
            </thead>
            <tbody class="">
                <?php for ($i = 0; $i < count($_SESSION['stagiaire']); $i++) {
                    echo '<tr class="">';
                    echo '<td class="bg-info-subtle text-dark rounded-start-2 opacity-75">' . $_SESSION['stagiaire'][$i]['ID'] . '</td>';
                    echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['stagiaire'][$i]['NOM'] . '</td>';
                    echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['stagiaire'][$i]['PRENOM'] . '</td>';
                    echo '<td class="bg-info-subtle text-dark rounded-end-2 opacity-75">' . $_SESSION['stagiaire'][$i]['PLACE'] . '</td>';
                    echo '</tr>';
                }
                ?>


            </tbody>
        </table>
    </div>


</body>

</html>
<?php

?>