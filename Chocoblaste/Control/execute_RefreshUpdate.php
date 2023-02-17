<?php
include "../Model/ReadChocoblaste.class.php";
session_start();
$affichage = new ReadChocoblaste();
$_SESSION['Denver'] = $affichage-> ReadChocoblaste();
// print_r($_SESSION);
header('Location:../View/update.php');