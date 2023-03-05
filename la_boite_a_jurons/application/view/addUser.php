<!-- KAOUTHAR -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body id="singin">
    <form id="inscr" action="../controller/inscriptionController.php" method="post">
        <div id="form2">
            <span>
                <h3>Inscription </h3>
                <p>Champ Obligatoire*</p>

                <label for="nom">Nom*</label>
                <input type="nom" placeholder="nom" name="nom" required>

                <label for="prenom">Prenom*</label>
                <input type="prenom" placeholder="prenom" name="prenom" required>


                <label for="dateNaissance">Date de Naissance </label>
                <input type="date" placeholder="Login" name="dateNaissance">
            </span>
            <span> </span>
            <span></span>
            <span>

                <label for="username">Username*</label>
                <input type="" placeholder="Login" id="log" name="login" required>
                <p id="error-message" style="color:indianred;"></p>

                <label for="password">Password*</label>
                <input type="password" placeholder="Password" name="mdp" required>

                <button id="btn" type="submit">Sign IN</button>
            </span>

        </div>

    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {
            $('#log').change(function() {
                var login = $('#log').val();
                $.ajax({
                    type: 'post',
                    url: '../controller/inscriptionController.php',
                    data: {
                        login: login
                    },
                    success: function(response) {
                        $('#error-message').html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>