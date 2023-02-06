<?php
include_once "../model/Point.class.php";

$x = readline("donner l'abcisse : ");
$y = readline("donner l'ordonne : ");
$point1 = new Point($x,$y);
$resultat = $point1 -> norme();
echo "La norme du point($x,$y) est : $resultat";
