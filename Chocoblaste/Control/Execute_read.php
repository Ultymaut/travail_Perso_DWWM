<?php
include "../DAO/Chocoblaste.DAO.php";
session_start();
$_SESSION['Denver'] = NULL;
$_SESSION['Denver'] = ReadChocoblaste();
// print_r($_SESSION);
header('Location:../View/read.php');




 

?>