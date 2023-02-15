<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../View/css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Read</title>
</head>
<body class="Background">
<?php session_start(); ?>
<nav class="navmarg">
  <div class="d-flex justify-content-evenly">
    <a class="" href="main.php" class="home"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
        </svg></a>  
      </div>
</nav>
    
<div class="d-flex justify-content-center" style="width:50em">  
  <table class="mt-5">
    <thead>
      <th class="arrondi-gauche">ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th class="arrondi-droit">Date</th>
    </thead>
    <tbody class="table-group-divider">    
      <?php for ($i = 0; $i < count($_SESSION['Denver']); $i++) {
        echo '<tr class="">';
        echo '<td class="">' . $_SESSION['Denver'][$i]['id'] . '</td>';
        echo '<td class="">' . $_SESSION['Denver'][$i]['nom'] . '</td>';
        echo '<td class="">' . $_SESSION['Denver'][$i]['prenom'] . '</td>';
        echo '<td class="">' . $_SESSION['Denver'][$i]['dateChoco'] . '</td>';
        echo '</tr>';
      }
      
?>
    </tbody>
  </table>
  </div>
</body>
</html>