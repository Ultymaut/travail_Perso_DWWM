<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../View/style.css" media="screen,projection" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>
<?php session_start(); ?>

<body class="bgc">
  
  <div class="card mt-1 pt-2 pb-2 d-flex justify-content-center">
    <p class="d-flex justify-content-center mb-1">Centre des Impôts de Paris</p>
    <form method="get" action="../Controller/execute_Function.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label ms-2 mb-1">Nom</label> <br>
        <input type="name" class="taille ms-2 ps-2" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label ms-2 mb-1">Prénom</label> <br>
        <input type="name" class="taille ms-2 ps-2" id="" name="prenom">
      </div>
      <label for="start" class="ms-2">Date de naissance </label> <br>
      <input type="date" id="start" name="Date_Naissance" value="2023-01-23" min="1990-01-01" max="2023-01-26" class="mt-2 ms-2">
      <div class="mt-2 mb-2 ms-2 form-check">
        <input type="radio" class="form-check-input" id="exampleCheck1" value="Homme" name="genre">
        <label class="form-check-label" for="exampleCheck1">Homme</label>
      </div>
      <div class="mb-2 ms-2 form-check">
        <input type="radio" class="form-check-input mr-6" id="exampleCheck1" value="Femme" name="genre">
        <label class="form-check-label" for="exampleCheck1">Femme</label>
      </div>
      <button type="submit" class="btn btn-primary mb-1 ml-1 ms-2">Valider</button>
    </form>
  </div>

</body>

</html>