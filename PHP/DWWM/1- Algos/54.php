<?php
/*

*/

// Initialisation tab
$tab=array(14,3,9,2,5);
$temp=0;
$pos=0;
$permut=1;

while ($permut==1) {
    $permut = 0;
    $pos++;
    for ($i=0; $i < count($tab)-$pos ; $i++) { 
        if ($tab[$i]%2==1 and $tab[$i+1]%2==0) {
            $permut= 1;
            $temp = $tab[$i];
            $tab[$i]=$tab[$i+1];
            $tab[$i+1]=$temp;
        }
    }
}

    

// affichage tab
for ($i=0; $i <count($tab) ; $i++) { 
  echo $tab[$i];
  echo "|";
}






?>