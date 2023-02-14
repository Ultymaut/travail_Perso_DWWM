<?php
include_once "../Model/Personne.class.php";
/*Class Etudiant qui est l'enfant de la class Personne est qui recupere donc sont __construct est sont __toString*/
class  Etudiant extends Personne{
    private int $cne;
    public function __construct($nom, $prenom,$cne)
    {
        parent::__construct($nom, $prenom);
        $this ->cne =$cne;
    }

    public function __toString()
    {
        return parent::__toString()."- Mon CNE est : ".$this->cne;
    }

    /**
     * @return int
     */
    public function getCne(): int
    {
        return $this->cne;
    }

    /**
     * @param int $cne
     */
    public function setCne(int $cne): void
    {
        $this->cne = $cne;
    }


}