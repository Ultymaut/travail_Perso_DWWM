<?php
/*
• Toujours à partir de deux tableaux précédemment saisis, écrivez
un algorithme qui calcule le schtroumpf des deux tableaux. Pour
calculer le schtroumpf, il faut multiplier chaque élément du
tableau I par chaque élément du tableau 2, et additionner le tout.
*/

// creation de tableau
$tab1 = array(2,5,8,4);
$tab2 = array(6,7);
$tot= 0;

// fusion des tableaux pour faire le total
for ($i=0; $i <4 ; $i++) { 
    for ($j=0; $j <2 ; $j++) { 
        $tot += ($tab1[$i] * $tab2[$j]) ;
    }
    
}

echo $tot;

?>