<?php
/*Ecrire un programme qui lit le prix HT d'un article, le nombre d'articles et le taux de TVA, et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés aparaissent clairement. (ttc = nba * pht *( 1 + tva ))
Saisir pht, nba, tva,
afficher ttc = nba * pht * (1 + tva)
*/

$pht = readline('Saisir le prix HT');
$nba = readline('Saisir le nombre d article');
$tva = readline('saisir la TVA');

echo "la TTC =" ; 
echo $nba*$pht*(1 + ($tva/100));


?>