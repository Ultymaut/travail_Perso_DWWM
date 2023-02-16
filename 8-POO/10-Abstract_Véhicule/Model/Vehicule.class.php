<?php
/*Class abstract mere avec deux methodes abstract et une methode __tostring() qui affiche les infos du véhicule*/
abstract class Vehicule{
    private int $matricule;
    private string $annee;
    private string $modele;
    private float $prix;
    public static int $compt = 1;
    public function __construct($annee,$modele,$prix)
    {
    $this->annee=$annee;
    $this->modele=$modele;
    $this->prix=$prix;
    $this->matricule = self::$compt++;
    }

    public abstract function demarrer();
    public abstract function accelerer();
    public function __toString()
    {
        return "- Matricule : $this->matricule \n- Année : $this->annee \n- Modèle : $this->modele \n- Prix du véhicule : $this->prix €";
    }

    /**
     * @return int
     */
    public function getMatricule(): int
    {
        return $this->matricule;
    }

    /**
     * @param int $matricule
     */
    public function setMatricule(int $matricule): void
    {
        $this->matricule = $matricule;
    }

    /**
     * @return string
     */
    public function getAnnee(): string
    {
        return $this->annee;
    }

    /**
     * @param string $annee
     */
    public function setAnnee(string $annee): void
    {
        $this->annee = $annee;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }


}