<?php
include_once "Personne.class.php";
/*class enfant Personne découlant de Personne avec deux methodes qui permet le traitement de certaines données*/
class Manager extends Personne{
    private string $service;
    public function __construct(string $nom, string $prenom, string $mail, int $tel, float $salaire,string $service)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->mail=$mail;
        $this->tel=$tel;
        $this->salaire=$salaire;
        $this->service = $service;
    }

    /*calcul du salaire par rapport a son poste de manager*/
    public function calculSalaire(): float
    {
            return $this->salaire += $this->salaire * 35/100;
    }

    /*Affichage des infos du ou des manager(s)*/
    public function afficherMan(){
        $salaire = $this->calculSalaire();
        echo "- Le salaire du manager ". strtoupper($this->nom)." ". ucfirst($this->prenom)." est de : $salaire €, son service : ".ucfirst($this->service);
    }
    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param string $service
     */
    public function setService(string $service): void
    {
        $this->service = $service;
    }

}