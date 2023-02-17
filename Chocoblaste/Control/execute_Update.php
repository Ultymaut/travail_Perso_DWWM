<?php
include "../Model/UpdateChocoblaste.class.php";
include "../Model/ReadChocoblaste.class.php";

session_start();

$affichage = new ReadChocoblaste();
$_SESSION['Denver'] = $affichage-> ReadChocoblaste();

$update = new updateChocoblaste();
$update ->updateChocoblaste();

header('Location:../View/Update.php');