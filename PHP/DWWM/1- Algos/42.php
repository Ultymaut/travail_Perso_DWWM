<?php
/*
Tri Tableau par selection
*/

// Creation tab et decla variables
$tab=array(14,3,9,2,5);
$petit =0;
$pos=0;


// parcours le tableau recherche le plus petit est le switch avec les plus grand
for ($i=0; $i <count($tab) ; $i++) { 
    $petit = $tab[$i];
        for ($j=$i+1; $j<count($tab) ; $j++) 
        { 
            if ($tab[$j]<$petit) {
                $petit=$tab[$j];
                $pos=$j;
            }
            if ($petit<$tab[$i]) {
                $tab[$pos]=$tab[$i];
                $tab[$i]=$petit; 
                }
                

        }

}

// Affiche le tab
for ($i=0; $i <count($tab) ; $i++) { 
    echo $tab[$i].PHP_EOL;
}
