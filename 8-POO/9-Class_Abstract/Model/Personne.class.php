<?php
/*abstract class mere Personne qu n'est jamais instancier est des données qu'on retrouve dans les classe enfants est un id auto_increment*/
abstract class Personne
{
    protected static int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected int $tel;
    protected float $salaire;

    public static function  __counter(){
        self::$id++;
    }
    abstract public function calculSalaire();
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