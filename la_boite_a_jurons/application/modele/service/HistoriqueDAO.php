<?php
require_once "InfractionDAO.php";
require_once "UserDAO.php";
class HistoriqueDAO
{
    private $conn;
    public function __construct($conn)
    {
        $this-> setConn ($conn);
    }
    public function insertIntoFait(User $user, Infraction $infractions)
    {
        $date = date("Y-m-d h:m:s");
        $id_infraction = $infractions->getId_infraction();
        $id_user = $user->getId_user();

        $req = $this -> getConn() -> prepare ("INSERT INTO fait (id_Infraction,id_user,date) VALUES (:id_Infraction,:id_user,:date)");

        $req->bindValue(':date', $date, PDO::PARAM_INT);
        $req->bindValue(':id_Infraction',$id_infraction,PDO::PARAM_INT);
        $req->bindValue(':id_user',$id_user,PDO::PARAM_INT);

        $req->execute();
        $req->closeCursor();
    }
    public function selectFaitByUser()
    {
        $req = $this -> getConn() -> prepare ('SELECT * FROM historique_solde');
        $req->execute();
        // recuperation en tableaux assiociative les donnée de l'infraction et user:
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){
            $historiquelist[] = array('nom'=>$ligne['nom'],'prenom'=>$ligne['prenom'],'login'=>$ligne['login'],'solde'=>$ligne['solde']);

        }
        $req->closeCursor();
        return $historiquelist;
    }
    public function selectAllFaitDate()
    {
        $req = $this -> getConn() -> prepare ('SELECT * FROM historique_date');
        $req->execute();

        // recuperation en tableaux assiociative les donnée de l'infraction et user:
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){
            $historiquelist[] = array('nom'=>$ligne['nom'],'prenom'=>$ligne['prenom'],'login'=>$ligne['login'],'libelee'=>$ligne['libelee'],'solde'=>$ligne['solde'],'date'=>$ligne['date']);

        }

        $req->closeCursor();
        return $historiquelist;
    }
    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @param mixed $conn
     */
    public function setConn($conn): void
    {
        $this->conn = $conn;
    }

}