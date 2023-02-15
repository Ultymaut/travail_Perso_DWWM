<?php
include_once "Personne.class.php";
/*class enfant Developpeur découlant de Personne avec deux methodes qui permet le traitement de certaines données*/
class Developpeur extends Personne{
    private string $specialite;
    public function __construct(string $nom, string $prenom, string $mail, int $tel, float $salaire, string $specialite)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->mail=$mail;
        $this->tel=$tel;
        $this->salaire=$salaire;
        $this->specialite=$specialite;
    }

    /*calcul du salaire par rapport a son poste de développeur*/
    public function calculSalaire(): float
    {
        return $this->salaire += $this->salaire * 20/100;
    }

    /*Affichage des infos du ou des développeur(s)*/
    public function afficherDev(){
        $salaire = $this->calculSalaire();
        echo "- Le salaire du developpeur ". strtoupper($this->nom)." ".ucfirst($this->prenom)." est de : $salaire €, sa spécialité : ".strtoupper($this->specialite);
    }
    /**
     * @return string
     */
    public function getSpecialite(): string
    {
        return $this->specialite;
    }

    /**
     * @param string $specialite
     */
    public function setSpecialite(string $specialite): void
    {
        $this->specialite = $specialite;
    }

}