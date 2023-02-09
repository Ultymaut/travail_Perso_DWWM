<?php
// Creation de la class client parent de la class compte qui permet d'envoyer certaines données
class Client{
    private $cin;
    private $nom;
    private $prenom;
    private $tel;

    public function __construct($cin,$nom,$prenom,$tel){
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

// Methode qui affiche certaines infos du client
    public function affichage(){
        $cin = $this->getCin();
        $nom = $this->getNom();
        $prenom = $this->getPrenom();
        $tel = $this->getTel();
        $test = "Propriétaire du compte : \nCIN : $cin \nNom : $nom \n Prénom : $prenom\nTél : $tel\n";
    }

    /**
     * Get the value of cin
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

}