<?php
include "../Model/ReadChocoblaste.class.php";
include "../Model/DeleteChocoblaste.class.php";

session_start();
$affichage = new ReadChocoblaste();
$_SESSION['Denver'] = $affichage-> ReadChocoblaste();

$delete = new DeleteChocoblaste();
$delete ->deleteChocoblaste();

header('Location:../View/delete.php');