<?php
/*class enfant Camion de la class mere Vehicule avec les fonctions demarrer(), accelerer() et __toString()*/

include_once "Vehicule.class.php";
class Camion extends Vehicule{
    public function __construct($annee, $modele, $prix)
    {
        parent::__construct($annee, $modele, $prix);
    }
    public  function demarrer() : void {
        echo "- Démarre en 2 sec \n";
    }
    public  function accelerer() : void{
        echo "- Va de 0 à 100 en 7 sec \n";
    }
   public function __toString()
   {
       echo "******************************Info du camion******************************\n";
       return parent::__toString();
   }
}