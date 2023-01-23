<?php
/*
• Ecrire un algorithme qui demande l'âge d'un enfant à l'utilisateur.
Ensuite, il l'informe de sa catégorie :
• "Poussin" de 6 à 7 ans
• "Pupille" de 8 à 9 ans
• "Minime" de IO à 11 ans
• "Cadet" après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat ?
*/

$age = readline ("donnez age");

if ($age==6 or $age==7) {
    echo"Poussin";
} else if ($age==8 or $age==9) {
    echo "pupille";
} else if ($age==10 or $age==11) {
    echo " minime";
} else if ($age >= 12) {
    echo "cadet";
} else {
    echo "trop jeune";
}
 




?>