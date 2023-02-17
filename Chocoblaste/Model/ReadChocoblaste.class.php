<?php
class ReadChocoblaste{
    private string $nom;
    private string $prenom;
    private string $dateChoco;
    public function __construct()
    {

    }
    public function ReadChocoblaste() : array{
        //Chaine de connexion à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=Chocoblaste;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // affichage des données
        $sql = "SELECT * FROM Denver";
        $stmt= $bdd->query($sql);
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $array;
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
    public function getDateChoco(): string
    {
        return $this->dateChoco;
    }

    /**
     * @param string $dateChoco
     */
    public function setDateChoco(string $dateChoco): void
    {
        $this->dateChoco = $dateChoco;
    }

}