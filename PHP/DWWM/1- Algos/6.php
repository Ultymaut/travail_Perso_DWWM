<?php
/*Ecrire un algorithme permettant d'échanger les valeurs des variables A et B.
Variable a et b entier
Variable temp entier (tempon)
debut
definir a,b,temp
temp = a
a = b
b = temp
fin
*/

$a = 1;
$b = 2;
$temp = 0;
$temp = $a;
$a = $b;
$b = $temp;

echo'debut';
echo"\n";
echo $a;
echo "\n";
echo $b;
echo"\n";
echo'fin';
?>