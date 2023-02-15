<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../View/css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Create</title>
</head>
<body class="Background">
<nav class="navmarg">
  <div class="d-flex justify-content-evenly">
    <a class="" href="main.php" class="home"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
        </svg></a>  
      </div>
</nav>
    <div class="d-flex justify-content-center">
    <div class="" style="width:50em">
        <form class="font2 mt-5 d-grid gap-4 col-4 mx-auto" action="../Control/Execute_create.php" method="Post">
          <div class="form-floating mb-3" style="width : 32em">
            <input type="Name" name="name" class="form-control" id="floatingInput" placeholder="Nom">
            <label for="floatingInput">Nom</label>
          </div>
          <div class="form-floating" style="width : 32em">
            <input type="Surname" name="surname" class="form-control" id="floatingPassword" placeholder="Prénom">
            <label for="floatingPassword">Prénom</label>
          </div>
          <div class="form-floating mt-3 mb-3" style="width : 32em">
            <input type="Date" name="dateChoco" class="form-control" id="floatingInput" placeholder="Date">
            <label for="floatingInput">Date</label>
          </div>
          <input type="submit" style="width : 32em" name="submit" class="btn btn-outline-success" value="Ajouter">
          <a style="width : 32em" href="../View/create.php" class="btn btn-outline-danger">Cancel</a>
        </form>
        </div>
</div>

    
</body>
</html>