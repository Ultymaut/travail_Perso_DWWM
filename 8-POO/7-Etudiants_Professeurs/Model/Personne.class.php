<?php
/*Class Personne qui est la class mere des 3 autres classe avec une 1 ere focntion __toString et une incrementation qui se fait seule sur l"id*/
class Personne{
    protected int $id;
    protected string $nom;
    protected string $prenom;

    public function __construct($nom,$prenom)
    {
        $this ->nom =$nom;
        $this ->prenom=$prenom;
    }
    public function __toString()
    {
    return "Je suis $this->nom $this->prenom :\n";
    }
    public function __incrementation(){
        $this->id++;
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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

}