<?php
include_once "Filiere.class.php";
/*class Etudiants qui prend les parametres de la class Filiere*/
class Etudiant{
    private string $nom;
    private string $prenom;
    private string $dateNaiss;
    static int $id;
    private Filiere $filiere;
    public function __construct(string $nom, string $prenom, string $dateNaiss, string $libele){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> dateNaiss = $dateNaiss;
        $this ->filiere = new Filiere($libele);

    }
    public function id(){
        self::$id++;
    }
    /*resort la chaine de caractere aves les params*/
    public function __toString(){
        return "Je suis l'étudiant $this->nom $this->prenom ma date de naissance est : $this->dateNaiss";
    }
    /**
     * @return Filiere
     */
    public function getFiliere(): Filiere
    {
        return $this->filiere;
    }

    /**
     * @param Filiere $filiere
     */
    public function setFiliere(Filiere $filiere): void
    {
        $this->filiere = $filiere;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * @param mixed $dateNaiss
     */
    public function setDateNaiss($dateNaiss): void
    {
        $this->dateNaiss = $dateNaiss;
    }

    /**
     * @return mixed
     */
    public static function getId()
    {
        return self::$id;
    }

    /**
     * @param mixed $id
     */
    public static function setId($id): void
    {
        self::$id = $id;
    }



}