<?php
/*
Saisir 3 entiers a, b, c et déterminer dans R les racines de l'équation ax2 + bx + c = 0.
*/

//Initialisation des valeurs
$a = readline('saisir valeur de a : ');
$b = readline('saisir valeur de b : ');
$c = readline('saisir valeur de c : ');
//Calcul pour avoir une condition pour if
$delta = ($b**2) - 4*$a*$c;

//Démarrage de la condition
if ($delta<0) {
    echo 'pas de solutions';
        } else {
            if ($delta == 0) {
                $x = (-$b)/(2*$a);
                    echo 'la solution est : '; 
                        echo $x;
                            } else {
                                if ($delta>0) {
                                    $x1 = (-$b-sqrt($delta))/(2*$a);
                                        $x2 = (-$b+sqrt($delta))/(2*$a);
                                            echo 'les solutions sont';
                                                echo $x1;
                                                    echo " et ";
                                                        echo $x2;
                                                            }
                                                                }
                                        
                                                                    }



?>