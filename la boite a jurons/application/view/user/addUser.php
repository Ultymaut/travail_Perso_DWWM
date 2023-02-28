<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body id="singin">
    <form id="form2">

        <span>

            <h3>Sign IN Here</h3>
            <p>* Champ Obligatoire</p>

            <label for="nom">Nom*</label>
            <input type="text" placeholder="nom" id="username" name="nom">

            <label for="prenom">Prenom*</label>
            <input type="text" placeholder="Prenom" id="username" name="prnom">

            
            <label for="dateNaissance">Date de Naissance </label>
            <input type="date" placeholder="Login" id="username" name="dateNaissance">

        </span>
        <span>
            <label for="username">Username*</label>
            <input type="text" placeholder="Login" id="username" name="logine">

            <label for="password">Password*</label>
            <input type="password" placeholder="Password" id="password" name="password">
        </span>
        <button type="submit">Sign IN</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>