<?php
/*Quelles seront les valeurs des variables A, B et C après exécution des instructions suivantes ?
Var A, B, C : Entier;
Début
a = 3
b = 10 
c = a + b
b = a + b 
a = c
Fin 
*/

$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo 'fin';

?>