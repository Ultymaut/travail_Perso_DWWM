<?php

include '../modele/Personne.class.php';
include '../modele/User.class.php';
include '../modele/Infraction.class.php';


$profileUser = new Profile ("HHH", "12345C");
$user1 = new User ("CARON", "BAPTISTE", "10/10/1997", "0.20", $profileUser);

$infract = new Infraction ("peiti J", "0.10");

echo $user1;
echo $infract;