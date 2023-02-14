<?php
include_once "../Model/Employe.class.php";
/*Class Professeur qui est l'enfant de la class Employe qui est elle meme l'enfant de la class Personne est qui recupere donc sont
__construct est sont __toString*/
class Professeur extends Employe {
    private string $specialites;
    public function __construct($nom, $prenom,$salaire,$specialites)
    {
        parent::__construct($nom, $prenom,$salaire);
        $this->specialites = $specialites;
    }
    public function __toString()
    {
        return parent::__toString()."- Ma spécialités est : $this->specialites";
    }

    /**
     * @return string
     */
    public function getSpecialites(): string
    {
        return $this->specialites;
    }

    /**
     * @param string $specialites
     */
    public function setSpecialites(string $specialites): void
    {
        $this->specialites = $specialites;
    }

}