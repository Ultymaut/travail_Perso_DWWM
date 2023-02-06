<?php
/* Creation d'une classe Livre pour verifier certaine info*/
class Livre{
    private $titre;
    private $auteur;
    private $prix;
    /* Creation d'un constructeur*/
    public function __construct($titre,$auteur,$prix)
    {
        $this ->titre = $titre ;
        $this ->auteur  = $auteur ;
        $this -> prix = $prix;
    }
    public function afficher():string{
        $titre = $this -> getTitre();
        $auteur = $this ->getAuteur();
        $prix = $this ->getPrix();
        $afficher ="Le titre est : $titre\nL'auteur est : $auteur\nLe prix est de : $prix €";
        return $afficher;
    }
    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    /* Creation de la methode pour afficher */

}