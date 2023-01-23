<?php
/*
Ecrire un algorithme qui permet de donner le résultat d'un étudiant à un module sachant que ce module est sanctionné par une note d'oral de coeff 1 et une ecrit de coeff 2. Le moyenne obtenuue doit etre sup ou égale a 10 pour valider le module.
*/

//Initialisation des valeurs
$note1 = readline('Saisir note coef 1 :');
$note2 = readline('saisir note coef 2 : ');

//Integration des valeurs dans une condition
if (($note1+$note2*2)/3>=10) {
    echo 'module validé';
} else {
    echo ' module pas validé';
}








?>