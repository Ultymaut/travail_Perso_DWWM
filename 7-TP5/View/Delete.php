<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet" href="../View/Delete.css" media="screen,projection" />
    <title>Document</title>
</head>
<?php session_start() ?>

<body>
    <header class="">
        <h1 class=" d-flex justify-content-around  mt-1  centre"> <a href="../View/index.html"><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="" file="red">
                    <path d="M11.03 2.59a1.501 1.501 0 0 1 1.94 0l7.5 6.363a1.5 1.5 0 0 1 .53 1.144V19.5a1.5 1.5 0 0 1-1.5 1.5h-5.75a.75.75 0 0 1-.75-.75V14h-2v6.25a.75.75 0 0 1-.75.75H4.5A1.5 1.5 0 0 1 3 19.5v-9.403c0-.44.194-.859.53-1.144ZM12 3.734l-7.5 6.363V19.5h5v-6.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 .75.75v6.25h5v-9.403Z"></path>
                </svg></a>

            <a href="../View/Insert.php" type="" class=""><svg fill="lightgreen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="opacity-75">
                    <path d="M3 3a2 2 0 0 1 2-2h9.982a2 2 0 0 1 1.414.586l4.018 4.018A2 2 0 0 1 21 7.018V21a2 2 0 0 1-2 2H4.75a.75.75 0 0 1 0-1.5H19a.5.5 0 0 0 .5-.5V8.5h-4a2 2 0 0 1-2-2v-4H5a.5.5 0 0 0-.5.5v6.25a.75.75 0 0 1-1.5 0Zm12-.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 0-.146-.336l-4.018-4.018A.5.5 0 0 0 15 2.5Z">
                    </path>
                    <path d="M0 13.75C0 12.784.784 12 1.75 12h3c.966 0 1.75.784 1.75 1.75v4a1.75 1.75 0 0 1-1.75 1.75h-3A1.75 1.75 0 0 1 0 17.75Zm1.75-.25a.25.25 0 0 0-.25.25v4c0 .138.112.25.25.25h3a.25.25 0 0 0 .25-.25v-4a.25.25 0 0 0-.25-.25ZM9 12a.75.75 0 0 0 0 1.5h1.5V18H9a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5H12v-5.25a.75.75 0 0 0-.75-.75H9Z">
                    </path>
                </svg></a>

            <a href="../Controller/exec_Select.php" class=""><svg fill="aqua" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="opacity-75">
                    <path d="M3.5 3.75C3.5 2.784 4.284 2 5.25 2h13.5c.966 0 1.75.784 1.75 1.75v7.5A1.75 1.75 0 0 1 18.75 13H5.25a1.75 1.75 0 0 1-1.75-1.75Zm-2 12c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v4a1.75 1.75 0 0 1-1.75 1.75H3.25a1.75 1.75 0 0 1-1.75-1.75ZM5.25 3.5a.25.25 0 0 0-.25.25v7.5c0 .138.112.25.25.25h13.5a.25.25 0 0 0 .25-.25v-7.5a.25.25 0 0 0-.25-.25Zm-2 12a.25.25 0 0 0-.25.25v4c0 .138.112.25.25.25h17.5a.25.25 0 0 0 .25-.25v-4a.25.25 0 0 0-.25-.25Z">
                    </path>
                    <path d="M10 17.75a.75.75 0 0 1 .75-.75h6.5a.75.75 0 0 1 0 1.5h-6.5a.75.75 0 0 1-.75-.75Zm-4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 0 1.5h-.5a.75.75 0 0 1-.75-.75Z">
                    </path>
                </svg></a>

            <a href="../View/Update.php" class=""><svg fill="orange" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="opacity-75">
                    <path d="M17.263 2.177a1.75 1.75 0 0 1 2.474 0l2.586 2.586a1.75 1.75 0 0 1 0 2.474L19.53 10.03l-.012.013L8.69 20.378a1.753 1.753 0 0 1-.699.409l-5.523 1.68a.748.748 0 0 1-.747-.188.748.748 0 0 1-.188-.747l1.673-5.5a1.75 1.75 0 0 1 .466-.756L14.476 4.963ZM4.708 16.361a.26.26 0 0 0-.067.108l-1.264 4.154 4.177-1.271a.253.253 0 0 0 .1-.059l10.273-9.806-2.94-2.939-10.279 9.813ZM19 8.44l2.263-2.262a.25.25 0 0 0 0-.354l-2.586-2.586a.25.25 0 0 0-.354 0L16.061 5.5Z">
                    </path>
                </svg></a>

            <a href="../View/Delete.php" type="button" class="" style="height: 5rem; width: 20rem"><svg fill="red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="opacity-75">
                    <path d="M9.036 7.976a.75.75 0 0 0-1.06 1.06L10.939 12l-2.963 2.963a.75.75 0 1 0 1.06 1.06L12 13.06l2.963 2.964a.75.75 0 0 0 1.061-1.06L13.061 12l2.963-2.964a.75.75 0 1 0-1.06-1.06L12 10.939 9.036 7.976Z">
                    </path>
                    <path d="M12 1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12 5.925 1 12 1ZM2.5 12a9.5 9.5 0 0 0 9.5 9.5 9.5 9.5 0 0 0 9.5-9.5A9.5 9.5 0 0 0 12 2.5 9.5 9.5 0 0 0 2.5 12Z">
                    </path>
                </svg></a>
        </h1>
    </header>
    <div class="position-absolute top-50 start-50 translate-middle h-75 d-inline-block mt-5">
        <table class="h-100 mt-4">
            <thead>
                <tr class="p-3 mb-2 bg-info text-dark opacity-75">
                    <th class="rounded-start-3">ID</th>
                    <th class="">NOM</th>
                    <th class="">PRENOM</th>
                    <th class="rounded-end-3">PLACE</th>
                </tr>
            </thead>
            <?php for ($i = 0; $i < count($_SESSION['stagiaire']); $i++) {
                echo '<tr class="">';
                echo '<td class="bg-info-subtle text-dark rounded-start-2 opacity-75">' . $_SESSION['stagiaire'][$i]['ID'] . '</td>';
                echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['stagiaire'][$i]['NOM'] . '</td>';
                echo '<td class="bg-info-subtle text-dark opacity-75">' . $_SESSION['stagiaire'][$i]['PRENOM'] . '</td>';
                echo '<td class="bg-info-subtle text-dark rounded-end-2 opacity-75">' . $_SESSION['stagiaire'][$i]['PLACE'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
    <div class="d-flex justify-content-center mb-3 ps-4">
        <form role="form" method="POST" action="../Controller/exec_Delete.php">
            <label class="text-white me-2">ID</label>
            <input type="ID" class="me-5" name="ID">
    </div>

    <div class="d-flex justify-content-center justify-content-beetween mb-5">
        <input type="submit" name="submit" class="btn btn-success me-5 mb-5" value="Delete">
        <a href="../View/delete.php" class="btn btn-danger  mb-5">Annuler </a>
    </div>
    </form>
</body>

</html>
<?php

?>