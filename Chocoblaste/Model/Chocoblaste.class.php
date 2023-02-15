<?php 


class chocoblaste{
    private string $nom;
    private string $prenom;
    private string $dateChocoChoco;
    

    public function __construct(string $nom,string $prenom,string $dateChoco){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateChoco = $dateChoco ;

    }
    public function affichage(){
        $dateChoco = $this->getdateChoco();
        $nom = $this->getNom();
        $prenom = $this->getPrenom();
        echo "► dateChoco du chocoblastage : $dateChoco\n";
        echo "► Nom du Chocoblasté : $nom\n";
        echo "► Prénom du Chocoblasté : $prenom\n";

    }
    function InsertChocoblaste(Chocoblaste $chocoblaste):bool{
        //Chaine de connexion à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=Chocoblaste;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $status = false ;

        $sql = "INSERT INTO Denver (nom, prenom, dateChoco) VALUES (?,?,?)";
        $stmt= $bdd->prepare($sql);
        $status = $stmt->execute([$chocoblaste->getNom(), $chocoblaste->getPrenom(), $chocoblaste->getdateChoco()]);


        return $status;
    }

    function ReadChocoblaste():array{
        //Chaine de connexion à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=Chocoblaste;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $sql = "SELECT * FROM Denver";
        $stmt= $bdd->query($sql);
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $array;
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
     * Get the value of dateChoco
     */ 
    public function getdateChoco()
    {
        return $this->dateChoco;
    }

    /**
     * Set the value of dateChoco
     *
     * @return  self
     */ 
    public function setdateChoco($dateChoco)
    {
        $this->dateChoco = $dateChoco;

        return $this;
    }

    /**
     * Get the value of compte
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set the value of compte
     *
     * @return  self
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

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
}



?>