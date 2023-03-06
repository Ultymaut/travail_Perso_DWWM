<?php
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\Infraction.class.php";
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\User.class.php";
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\service\UserDAO.php";

//BAPTISTE
class InfractionDAO
{
    private PDO $conn;

    public function __construct($conn)
    {
        $this->setConn($conn);
    }

    public function insertInfractions(Infraction $infractions): void
    {
        $req = $this->getConn()->prepare('INSERT INTO type_infractions (libelee,montant) VALUES (:type,:montant)');
        $req->bindValue(':type', $infractions->getType(), PDO::PARAM_INT);
        $req->bindValue(':montant', $infractions->getMontant(), PDO::PARAM_INT);
        $req->execute();
        $req->closeCursor();
    }



    public function selectInfractionsByLibelee(string $libelee)
    {
        $req = $this->getConn()->prepare("SELECT * FROM type_infractions where libelee = :libelee");

        $req->bindValue(':libelee', $libelee, PDO::PARAM_STR);

        $req->execute();

        if ($ligne = $req->fetch()) {
            // recuperation en tableaux assiociative les donnée de l'infraction (libelee,montant):
          
            $inf = new Infraction($ligne['libelee'], $ligne['montant']);
            $inf->setId_infraction($ligne['id_Infraction']);

            $req->closeCursor();

            return $inf;
        } else {
            return null;
        }
    }
    public function selectAllInfraction()
    {
        $req = $this->getConn()->prepare('SELECT * FROM type_infractions');

        $req->execute();

        // recuperation en tableaux assiociative les donnée de l'infraction (libelee,montant):
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            $inflist[] = array('id_Infraction' => $ligne['id_Infraction'], 'libelee' => $ligne['libelee'], 'montant' => $ligne['montant']);
        }

        $req->closeCursor();
        return $inflist;
    }

    public function deleteInfractions(Infraction $infraction)
    {
        $infraction = $this->selectInfractionsByLibelee($infraction->getType());
        $id_Infraction = $infraction->getId_infraction();
        $req = $this->getConn()->prepare('DELETE FROM type_infractions WHERE id_Infraction=:id_Infraction');
        $req->bindValue(':id_Infraction', $id_Infraction, PDO::PARAM_INT);
        $req->execute();

        return $req;
    }

    public function updateInfractions(Infraction $infraction, string $libelee, float $montant)
    {
        $lib = $infraction->getType();
        $infraction = $this->selectInfractionsByLibelee($lib);
        $id = $infraction->getId_infraction();

        $req = $this->getConn()->prepare("UPDATE type_infractions SET libelee = :libelee, montant=:montant where id_Infraction=:id_Infraction");
        $req->bindValue(':libelee', $libelee, PDO::PARAM_STR);
        $req->bindValue(':montant', $montant, PDO::PARAM_STR);
        $req->bindValue(':id_Infraction', $id, PDO::PARAM_INT);

        $status = $req->execute();
        $req->closeCursor();

        return $status;
    }

    public function incrementeInfraction(User $user, Infraction $infraction)
    {
        $req = $this->getConn()->prepare('INSERT INTO fait(id_Infraction,id_user) VALUES (:id_Infraction,:id_user)');

        $conn = $this->getConn();
        $userDAO = new UserDAO($conn);
        $infractionDAO = new InfractionDAO($conn);
        $libelee = $infraction->getType();
        
        $infraction = $infractionDAO->selectInfractionsByLibelee($libelee);

        $login = $user->getProfile()->getLogin();
        $user = $userDAO->getUsertByLogin($login);

        $id_user = $user->getId_user();
        $id_Infraction = $infraction->getId_infraction();

        $req->bindValue(':id_Infraction', $id_Infraction, PDO::PARAM_STR);
        $req->bindValue(':id_user', $id_user, PDO::PARAM_STR);

        $status = $req->execute();
        $req->closeCursor();

        return $status;
    }

    public function decrementeInfraction(User $user, Infraction $infraction)
    {
        $req = $this->getConn()->prepare('DELETE FROM fait WHERE id_Infraction = :id_Infraction AND id_user = :id_user;');

        $conn = $this->getConn();
        $userDAO = new UserDAO($conn);
        $infractionDAO = new InfractionDAO($conn);
        $libelee = $infraction->getType();
        
        $infraction = $infractionDAO->selectInfractionsByLibelee($libelee);

        $login = $user->getProfile()->getLogin();
        $user = $userDAO->getUsertByLogin($login);

        $id_user = $user->getId_user();
        $id_Infraction = $infraction->getId_infraction();

        $req->bindValue(':id_Infraction', $id_Infraction, PDO::PARAM_STR);
        $req->bindValue(':id_user', $id_user, PDO::PARAM_STR);

        $status = $req->execute();
        $req->closeCursor();

        return $status;
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
