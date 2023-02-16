<?php
/*class enfant Voiture de la class mere Vehicule avec les fonctions demarrer(), accelerer() et __toString()*/

include_once "Vehicule.class.php";
class Voiture extends Vehicule{
    public function __construct($annee, $modele, $prix)
    {
        parent::__construct($annee, $modele, $prix);
    }
    public  function demarrer() : void {
        echo "- Démarre en 0.1 sec \n";
    }
    public  function accelerer() : void{
        echo "- Va de 0 à 100 en 3,5 sec \n";
    }
    public function __toString()
    {
        echo "******************************Info de la voiture****************************** \n";
        return parent::__toString();
    }
}