<?php
class Personne{
    protected static int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $tel;
    protected float $salaire;
    public function __construct($nom,$prenom,$mail,$tel,$salaire)
    {
        $this->nom =$nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel =$tel;
        $this->salaire = $salaire;

    }
    public function __auto(){
        self::$id++;
    }
    public function __calculSalaire() : float{
        $salaire = ($this->salaire * 35)*30;
        return $salaire;
    }
    public function __toString(){
        return"Nom : $this->nom \nPrenom : $this->prenom \nMail : $this->mail \nTéléphone : $this->tel \nSalaire : $this->salaire";
    }

    /**
     * @return int
     */
    public static function getId(): int
    {
        return self::$id;
    }

    /**
     * @param int $id
     */
    public static function setId(int $id): void
    {
        self::$id = $id;
    }


    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return float
     */
    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * @param float $salaire
     */
    public function setSalaire(float $salaire): void
    {
        $this->salaire = $salaire;
    }

}