<?php
// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alphanumériques à une variable
$tab1 = array(
'baobab' => 5.4,
'artichaud' => 2.3,
'igloo' => 2.2
);

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alphanumériques à une variable
$tab2 = array(
'dede' => 'zozo',
'gege' => 'coco',
'haba' => 'lola',
);

// affiche le tab et leurs associatifs
foreach ($tab1 as $key => $value) {
    echo "$key : $value"."\n";
}

echo "\n";

// affiche le tab et leurs associatifs
foreach ($tab2 as $key => $value) {
    echo "$key : $value"."\n";
}
