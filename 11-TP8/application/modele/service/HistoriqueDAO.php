<?php
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\service\InfractionDAO.php";
require_once "C:/xampp\htdocs\la_boite_a_jurons\application\modele\service\UserDAO.php";
<<<<<<< HEAD:11-TP8/application/modele/service/HistoriqueDAO.php
=======
//KATIA ET BAPTISTE
>>>>>>> ff3caee15e9bdf7ef4c9b05c61454ab625a52110:la_boite_a_jurons/application/modele/service/HistoriqueDAO.php
class HistoriqueDAO
{
    private $conn;
    public function __construct($conn)
    {
        $this-> setConn ($conn);
    }

<<<<<<< HEAD:11-TP8/application/modele/service/HistoriqueDAO.php

   

=======
>>>>>>> ff3caee15e9bdf7ef4c9b05c61454ab625a52110:la_boite_a_jurons/application/modele/service/HistoriqueDAO.php
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

<<<<<<< HEAD:11-TP8/application/modele/service/HistoriqueDAO.php

=======
>>>>>>> ff3caee15e9bdf7ef4c9b05c61454ab625a52110:la_boite_a_jurons/application/modele/service/HistoriqueDAO.php
    public function selectFaitByUser(User $user)
    {
        $conn = $this->getConn();
        $userDAO = new UserDAO($conn);
        $log= $user->getProfile()->getLogin();
        $user= $userDAO->getUsertByLogin($log);
        $id_user=$user->getId_user();


        $req = $this -> getConn() -> prepare ('SELECT DISTINCT
        libelee,
        round(sum(t.montant),2) AS cerdit 
       FROM ((fait f join users u) join type_infractions t) 
       WHERE f.id_user = u.id_user  AND f.id_user= :id_user and f.id_Infraction = t.id_Infraction GROUP BY libelee;');

       $req->bindValue(':id_user',$id_user,PDO::PARAM_INT);

        $req->execute();
        // recuperation en tableaux assiociative les donn??e de l'infraction et user:
        if($req->execute())
        {
            while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){
                $historiquelist[] = array('libelee'=>$ligne['libelee'],'solde'=>$ligne['cerdit']);
            }
            $req->closeCursor();
            return $historiquelist;

        }else{
            return null;
        }
        
    }
    public function selectAllFaitDate()
    {
        $req = $this -> getConn() -> prepare ('SELECT DISTINCT
        u.nom AS nom,
        u.prenom AS prenom,
        u.login AS login,
        t.libelee AS libelee,
        round(sum(t.montant),2) AS solde,
        f.date AS date 
       
       FROM ((fait f join users u) join type_infractions t) 
       WHERE f.id_user = u.id_user AND f.id_Infraction = t.id_Infraction GROUP BY f.date;');
        $req->execute();

        // recuperation en tableaux assiociative les donn??e de l'infraction et user:
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){
            $historiquelist[] = array('nom'=>$ligne['nom'],'prenom'=>$ligne['prenom'],'login'=>$ligne['login'],'libelee'=>$ligne['libelee'],'solde'=>$ligne['solde'],'date'=>$ligne['date']);

        }

        $req->closeCursor();
        return $historiquelist;
    }

<<<<<<< HEAD:11-TP8/application/modele/service/HistoriqueDAO.php
    

=======
>>>>>>> ff3caee15e9bdf7ef4c9b05c61454ab625a52110:la_boite_a_jurons/application/modele/service/HistoriqueDAO.php
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