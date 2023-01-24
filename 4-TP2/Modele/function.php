<?php

function getAgeFromeDate($date_naiss) : int {
    $date_ajd = date_create(date("d-m-y"));
    $date =date_create($date_naiss);
    $age = $date -> diff($date_ajd) ->format ('%y');
    return $age;
}


function verifImpotParis (int $age, string $sexe) : bool {
    if ($age > 20 and $sexe =='Homme') {
        $reponse = true;
        $_SESSION['status'] = "imposable";
    } else  if ($age>=18 and $age<=35 and $sexe == 'Femme') {
        $reponse = true;
        $_SESSION['status'] = "imposable";
    } else {
        $reponse = false;
        $_SESSION['status'] = "non imposable";
    }  
    return $reponse;
}



?>