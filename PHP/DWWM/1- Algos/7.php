<?php
/*On dispose de trois variables A, B et C. Ecrivez un algorithme transférant à B la valeur de A, à C la valeur de B et à A la valeur de C.
debut
definir a,b,c,temp
temp = b
b = a
a = c
c = temp

fin


*/

$a = 1;
$b = 2;
$c = 3;
$temp = 0;
$temp = $b;
$b = $a;
$a = $c;
$c = $temp;

echo'debut';
echo"\n";
echo $a;
echo "\n";
echo $b;
echo"\n";
echo $c;
echo"\n";
echo'fin';
?>
