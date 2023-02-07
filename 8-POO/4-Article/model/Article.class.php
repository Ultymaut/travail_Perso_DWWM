<?php
/* Creation d'une class Article afin de faire le calcul TTC et avoir un certain affichage*/
class Article{
    private $reference;
    private $designation;
    private $prixHT;
    private $tauxTVA;
    /* Creation d'un constructeur*/
    public function __construct($reference,$designation)
    {
        $this ->reference = $reference ;
        $this ->designation  = $designation ;

    }
    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->deisgnation = $designation;
    }

    /**
     * @return mixed
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * @param mixed $prixHT
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;
    }

    /**
     * @return mixed
     */
    public function getTauxTVA()
    {
        return $this->tauxTVA;
    }

    /**
     * @param mixed $tauxTVA
     */
    public function setTauxTVA($tauxTVA)
    {
        $this->tauxTVA = $tauxTVA;
    }
    /*Création des 2 méthodes*/
    public function calculerPrixTTC()
    {
        $prixHT = $this->getPrixHT();
        $tauxTVA= $this->getTauxTVA();
        $calcul = $prixHT + ($prixHT * $tauxTVA/100);
        return $calcul;
    }
    public function afficherArticle()
    {
        $designation = $this ->getDesignation();
        $reference = $this ->getReference();
        $prixHT = $this ->getPrixHT();
        $TTC = $this->calculerPrixTTC();
        echo "Référence : $reference\nDésignation : $designation\nPrixHT : $prixHT\nLe prix TTC est de : $TTC";
    }

}