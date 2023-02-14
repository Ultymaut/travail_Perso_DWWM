<?php
include_once "../Model/Personne.class.php";
/*Class Employe qui est l'enfant de la class Personne est qui recupere donc sont __construct est sont __toString*/
class Employe extends Personne{
    protected float $salaire;

    public function __construct($nom, $prenom,$salaire)
    {
        parent::__construct($nom, $prenom);
        $this -> salaire = $salaire;
    }
    public function __toString()
    {
        return parent::__toString()."- Mon salaire est de : $this->salaire €\n";
    }

    /**
     * @return int
     */
    public function getSalaire(): int
    {
        return $this->salaire;
    }

    /**
     * @param int $salaire
     */
    public function setSalaire(int $salaire): void
    {
        $this->salaire = $salaire;
    }

}