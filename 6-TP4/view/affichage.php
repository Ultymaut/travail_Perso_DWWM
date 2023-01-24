<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="style.css" media="screen,projection" />
</head>

<body class="bg">
    <?php session_start(); ?>

    <div class="form border color1">
        <p>El Presidente</p>
        <br>
        <form action="../controller/execute_melange.php" method="get">
            <input class="btn elDirector" type="submit" value="Decideur" />
        </form>
        <form action="../controller/execute_telechargement.php" method="get">
            <input type="submit" value="DL">
        </form>
    </div>

    <div class="grille">

        <div class="relative">
            <!-- Table 1 -->
            <table>
                <!-- Place_1 et 2 -->
                <tr class="color">
                    <td>Place_1 <br> <?php echo $_SESSION['Place_16']; ?> <br> </td>
                    <td>Place_2 <br> <?php echo $_SESSION['Place_5']; ?> <br> </td>
                </tr>
                <!-- Place_3 et 4 -->
                <tr class="color">
                    <td>Place_3 <br><?php echo $_SESSION['Place_9']; ?><br></td>
                    <td>Place_4 <br><?php echo $_SESSION['Place_3']; ?><br></td>
                </tr>
            </table>
        </div>

        <div class="relative table2">
            <!-- Table 2 -->
            <table>
                <!-- Place_5 et 6 -->
                <tr class="color">
                    <td>Place_5 <br><?php echo $_SESSION['Place_1']; ?> <br></td>
                    <td>Place_6 <br><?php echo $_SESSION['Place_11']; ?> <br></td>
                </tr>
                <!-- Place_7 et 8 -->
                <tr class="color">
                    <td>Place_7 <br><?php echo $_SESSION['Place_7']; ?> <br></td>
                    <td>Place_8 <br><?php echo $_SESSION['Place_15']; ?> <br></td>
                </tr>
            </table>
        </div>

        <div class="relative table3">
            <!-- Table 3 -->
            <table>
                <!-- Place_9 et 10 -->
                <tr class="color">
                    <td>Place_10 <br><?php echo $_SESSION['Place_4']; ?><br></td>
                    <td>Place_9 <br><?php echo $_SESSION['Place_2']; ?><br></td>
                </tr>
                <!-- Place_11 et 12 -->
                <tr class="color">
                    <td>Place_11<br><?php echo $_SESSION['Place_11']; ?><br></td>
                    <td>Place_12<br><?php echo $_SESSION['Place_13']; ?><br></td>
                </tr>
            </table>
        </div>

        <div class="relative table4">
            <!-- Table 4 -->
            <table>
                <!-- Place_13 et 14 -->
                <tr class="color">
                    <td>Place_13<br><?php echo $_SESSION['Place_12']; ?><br></td>
                    <td>Place_14<br><?php echo $_SESSION['Place_10']; ?><br></td>
                </tr>
                <!-- Place_15 et 16 -->
                <tr class="color">
                    <td>Place_15<br><?php echo $_SESSION['Place_8']; ?><br></td>
                    <td>Place_16<br><?php echo $_SESSION['Place_6']; ?><br></td>
            </table>
        </div>
    </div>
</body>


</html>