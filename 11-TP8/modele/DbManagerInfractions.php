<?php
require_once "../modele/Infraction.class.php";

class DbManagerInfractions{
    private int $id;
    private PDO $conn;

    public function __construct($conn)
    {
        $this->setConn($conn);
    }

    public function InsertInfractions ($Infractions) :void{
        $req = $this->getConn()->prepare('INSERT INTO type_infractions (libelee,montant) VALUES (:type,:montant)');
        $req->bindValue(':type', $Infractions->getType(), PDO::PARAM_STR);
        $req->bindValue(':montant', $Infractions->getMontant(), PDO::PARAM_STR);
        $req->execute();
        $req->closeCursor();
    }

    public function SelectInfractions ($Infractions) :array{
        $req = $this->getConn()->prepare('SELECT * FROM type_infractions WHERE id_Infraction=$id_Infraction');
        $req->execute();

        while ($donnees = $req->fetch()) {
            $Liste[] = new Infraction($donnees['montant'], $donnees['libelee']);
        }

        $req->closeCursor();
        return $Liste ;
    }
    public function SelectAllInfractions (): array {
        $req = $this->getConn()->prepare('SELECT * FROM type_infractions');
        $req->execute();

        while ($donnees = $req->fetch()) {
            $Liste[] = new Infraction($donnees['montant'], $donnees['libelee']);
             }

        $req->closeCursor();
        return $Liste ;
    }
    public function DeleteInfractions ($ID_Infraction) :bool{
        $req = $this->getConn()->prepare('DELETE FROM type_infractions WHERE id_Infraction=$id_Infraction');
        $req->execute();

        return $req ;
    }
    public function UpdateInfractions($Infractions):bool{
        $libelee=$_POST['libelee'];
        $montant=$_POST['montant'];
        $id_Infraction=$_POST['id_Infraction'];
        $req = $this->getConn()->prepare("UPDATE type_infractions SET libelee='$libelee', montant='$montant' WHERE id_Infraction=$id_Infraction");
        $req->execute();

        return $req ;
    }
    public function HistoriqueInfraction(){

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
     * @return PDO
     */
    public function getConn(): PDO
    {
        return $this->conn;
    }

    /**
     * @param PDO $conn
     */
    public function setConn(PDO $conn): void
    {
        $this->conn = $conn;
    }


}