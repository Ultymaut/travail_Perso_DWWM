<?php
class UpdateChocoblaste{
    private string $nom;
    private string $prenom;
    private string $dateChoco;
    public function __construct()
    {

    }
    public function updateChocoblaste(): bool
    {
        //Chaine de connexion à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=Chocoblaste;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // modification des données
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $id = $_POST['id'];
        $dateChoco = $_POST['dateChoco'];
        $sql = "UPDATE Denver SET nom='$nom', prenom='$prenom', dateChoco='$dateChoco'  WHERE id='$id'";
        $stmt = $bdd->prepare($sql);
        $update = $stmt->execute();
        return $update;
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