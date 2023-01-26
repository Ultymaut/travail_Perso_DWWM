<?php
/*
Les habitants de paris paient l'impôt selon les règles suivantes :
- les hommes de plus de 20 ans paient l'impôt
- les femmes paient l'impôt si elles ont entre 18 et 35 ans
- les autres ne paient pas d'impôt
Le programme demandera donc l'âge et le sexe du parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable.
*/

$age = readline('Veuillez saisir votre age ');
$sexe = readline( 'Veuillez saisir votre sexe ');



if ($age > 20 and $sexe =='homme') {
    echo 'paie des impots';
} else  if ($age>=18 and $age<=35 and $sexe == 'femme') {
   echo 'paie des impots';
} else {
    echo 'ne paie rien';
}







?>