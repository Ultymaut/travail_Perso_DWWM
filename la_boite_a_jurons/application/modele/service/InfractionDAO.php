<?php
require_once "../../modele/Infraction.class.php";
require_once "../../modele/User.class.php";

class InfractionDAO{
    private PDO $conn;

    public function __construct($conn)
    {
        $this->setConn($conn);
    }

    public function insertInfractions (Infraction $infractions) :void{
        $req = $this->getConn()->prepare('INSERT INTO type_infractions (libelee,montant) VALUES (:type,:montant)');
        $req->bindValue(':type', $infractions->getType(), PDO::PARAM_INT);
        $req->bindValue(':montant', $infractions->getMontant(), PDO::PARAM_INT);
        $req->execute();
        $req->closeCursor();
    }

    public function selectInfractionsByLibelee (string $libelee)
    {
        $req = $this -> getConn() -> prepare ("SELECT * FROM type_infractions where libelee = :libelee");

        $req->bindValue(':libelee', $libelee, PDO::PARAM_STR);

        $status = $req->execute();

        if ($status) {
            // recuperation en tableaux assiociative les donnée de l'infraction (libelee,montant):
            $ligne = $req->fetch();
            $inf = new Infraction($ligne['libelee'],$ligne['montant']);
            $inf->setId_infraction($ligne['id_Infraction']);

            $req->closeCursor();

            return $inf;
        } else {
            return null;
        }
    }
    public function selectAllInfraction ()
    {
        $req = $this -> getConn() -> prepare ('SELECT * FROM type_infractions');

        $req->execute();

        // recuperation en tableaux assiociative les donnée de l'infraction (libelee,montant):
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){
            $inflist[] = array('id_Infraction'=>$ligne['id_Infraction'],'libelee'=>$ligne['libelee'],'montant'=>$ligne['montant']);

        }

        $req->closeCursor();
        return $inflist;
    }

    public function deleteInfractions (Infraction $infraction) {
        $infraction = $this->selectInfractionsByLibelee($infraction->getType());
        $id_Infraction=$infraction->getId_infraction();
        $req = $this->getConn()->prepare('DELETE FROM type_infractions WHERE id_Infraction=:id_Infraction');
        $req->bindValue(':id_Infraction', $id_Infraction, PDO::PARAM_INT);
        $req->execute();

        return $req ;
    }
    public function updateInfractions(Infraction $infraction, string $libelee ,float $montant) {
        $lib=$infraction->getType();
        $infraction= $this->selectInfractionsByLibelee($lib);
        $id=$infraction->getId_infraction();

        $req= $this->getConn()->prepare("UPDATE type_infractions SET libelee = :libelee, montant=:montant where id_Infraction=:id_Infraction");
        $req->bindValue(':libelee', $libelee, PDO::PARAM_STR);
        $req->bindValue(':montant', $montant, PDO::PARAM_STR);
        $req->bindValue(':id_Infraction', $id, PDO::PARAM_INT);

        $req->execute();
        $req->closeCursor();
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