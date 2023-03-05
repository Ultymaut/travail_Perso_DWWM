<?php
require_once("C://xampp\htdocs\la_boite_a_jurons\application\modele\User.class.php");
require_once ("C://xampp\htdocs\la_boite_a_jurons\application\modele\Infraction.class.php");
require_once "C://xampp\htdocs\la_boite_a_jurons\application\modele\Profile.class.php";

//KATIA
class UserDAO
{

    private $conn;

    public function __construct($conection)
    {
        $this-> setConn ($conection);
    }

    public function insertUser (User $user) :void{

        $login= $user->getProfile()->getLogin();
        $mdp = $user->getProfile()->getMDp();

        $req = $this->getConn()->prepare('INSERT INTO users (nom,prenom,dateNaissance,solde,login,mdp ) VALUES (:nom,:prenom,:dateNaissance,:solde,:login,:mdp )');
        $req2 = $this->getConn()->prepare('INSERT INTO profile (login,mdp ) VALUES (:login,:mdp )');

        $req->bindValue(':login', $login, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);

        $req2->bindValue(':login', $login, PDO::PARAM_STR);
        $req2->bindValue(':mdp', $mdp, PDO::PARAM_STR);

        $req->bindValue(':nom', $user->getNom(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $user->getPrenom(), PDO::PARAM_STR);
        $req->bindValue(':dateNaissance', $user->getDateNaissance(), PDO::PARAM_STR);
        $req->bindValue(':solde', $user->getSolde(), PDO::PARAM_STR);

        $req->execute();
        $req->closeCursor();
        $req2->execute();
        $req2->closeCursor();
    }

    public function selectAllUser()
    {
        $req = $this -> getConn() -> prepare ('SELECT * FROM users');

        $req->execute();

        // recuperation en tableaux assiociative les donnée de l'infraction (libelee,montant):
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){
            $userlist[] = array('id_user'=>$ligne['id_user'],'nom'=>$ligne['nom'],'prenom'=>$ligne['prenom'],'dateNaissance'=>$ligne['dateNaissance'],'solde'=>$ligne['solde'],'login'=>$ligne['login'],'mdp'=>$ligne['mdp']);

        }

        $req->closeCursor();
        return $userlist;
    }

    public function getUsertByLogin (string $login)
    {
        $req = $this -> getConn() -> prepare ("SELECT * FROM users where login = :login");
        $req2 = $this -> getConn() -> prepare ("SELECT * FROM profile where login = :login");
        $req->bindValue(':login', $login, PDO::PARAM_STR);
        $req2->bindValue(':login', $login, PDO::PARAM_STR);
        $req->execute();
        $req2->execute();

        if (($ligne = $req->fetch(PDO::FETCH_ASSOC)) && ($ligne2 = $req2->fetch(PDO::FETCH_ASSOC))) {

            // recuperation en tableaux assiociative les donnée de la personne (id, nom, prenom): 
            $profile = new Profile($ligne['login'], $ligne['mdp']);
            $user = new User($ligne['nom'],$ligne['prenom'],$ligne['dateNaissance'],$ligne['solde'], $profile);

            $profileUser = $user->getProfile();

            $profileUser->setPrivilege($ligne2['privilege']);

            $user->setId_user($ligne['id_user']);

            $req->closeCursor();

            return $user;
        } else {
            return null;   
        }
    }

    public function updateUser(User $user,string $nom,string $prenom,string $dateNaiss){
        $log=$user->getProfile()->getLogin();
        $user= $this->getUsertByLogin($log);
        $id=$user->getId_user();

        $req= $this->getConn()->prepare("UPDATE users SET nom = :nom, prenom=:prenom, dateNaissance=:dateNaissance where id_user=:id_user");

        $req->bindValue(':nom', $nom, PDO::PARAM_STR);
        $req->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $req->bindValue(':dateNaissance', $dateNaiss, PDO::PARAM_STR);
        $req->bindValue(':id_user', $id, PDO::PARAM_INT);

        $req->execute();
        $req->closeCursor();
    }
  //Mounir
    public function updatePrivilegeByLogin(string $login, string $newPrivilege){
        $newPrivilege = ($newPrivilege == 'Admin') ? 1 : 0 ;

        $req= $this->getConn()->prepare("UPDATE profile SET privilege = :privilege where login =:login");

        $req->bindValue(':privilege', $newPrivilege, PDO::PARAM_STR);
        $req->bindValue(':login', $login, PDO::PARAM_STR);

        $req->execute();
        $req->closeCursor();
    }

    
    public function updateUserSolde (User $user){

        $log=$user->getProfile()->getLogin();
        $user= $this->getUsertByLogin($log);
        $id=$user->getId_user();

        $req2=$this->getConn()->prepare ("SELECT round(SUM(montant),2) as newSolde from fait f, users u, type_infractions t where f.id_user=u.id_user and f.id_Infraction = t.id_infraction and f.id_user = :id_user GROUP by login;");

        $req2->bindValue(':id_user', $id, PDO::PARAM_STR);
        $req2->execute();
        $solde=$req2->fetch();
        
        $req= $this->getConn()->prepare("UPDATE users SET solde = :solde where id_user=:id_user");

        $req->bindValue(':solde', $solde['newSolde'], PDO::PARAM_STR);
        $req->bindValue(':id_user', $id, PDO::PARAM_STR);
       

        $req->execute();
        $req->closeCursor();

        return $solde['newSolde'];


    }




    public function deleteUser (User $user)
    {
        $log=$user->getProfile()->getLogin();
        $user= $this->getUsertByLogin($log);
        $id=$user->getId_user();

        $req = $this->getConn()->prepare('DELETE FROM users WHERE  id_user = :id_user');
        $req->bindValue(':id_user', $id, PDO::PARAM_STR);
        $req->execute();

        return $req;
    }

    public function getHistoriqueUser (User $user)
    {
        $req=$this->getConn()->prepare ('SELECT nom, prenom, login, libelee, round (sum(f.montant),2) as amount FROM fait t, users u, type_infractions f where f.id_Infraction = t.id_Infraction and u.id_user = :id_user GROUP by login, libelee;');

        $login = $user->getProfile()->getLogin();
        $user = $this->getUsertByLogin($login);


        $id_user = $user->getId_user();

        $req->bindValue(':id_user', $id_user, PDO::PARAM_STR);
       
        // recuperation en tableaux assiociative les donnée de l'infraction (libelee,montant):
        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){

            $infractionliste[] = array($ligne['libelee'], $ligne['amount']);
            

        }

        $req->closeCursor();
        return $infractionliste;

    }


    /**
     * Get the value of conection
     */ 
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * Set the value of conection
     *
     * @return  self
     */ 
    public function setConn($conn)
    {
        $this->conn = $conn;

        return $this;
    }
}

