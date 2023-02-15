<?php
include_once "Profil.class.php";

/*class enfant de la class Personne est la class Profil est intégrer au sein de cette class*/
class Utilisateur extends Personne{
    private string $login;
    private string $passsword;
    private string $services;
    private Profil $profil ;
    public function __construct($nom, $prenom, $mail, $tel, $salaire,$login,$passsword,$services,$profil)
    {
        parent::__construct($nom, $prenom, $mail, $tel, $salaire);
        $this ->login = $login;
        $this ->passsword = $passsword;
        $this ->services = $services;
        $this -> Profil = $profil;
    }
/*Affiche de la class Personne avec d'autres données*/
    public function afficher() : void
    {
        parent::afficher();
        $code = $this->Profil->getCode();
        echo "- ID : $this->login\n- Services : $this->services \n- Code : $code\n";
    }
/*Calcul le salaire si une conditions est remplie puis la renvoie a la methode de la class mere Personne*/
    public function calculSalaire(): float
    {
        if ($this->services == "Manager"){
           return $this->salaire += $this->salaire * 10/100;
        } elseif ($this->services == "Directeur"){
            return $this->salaire += $this->salaire * 40/100;
        }
        return parent::calculSalaire();
    }

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param mixed $profil
     */
    public function setProfil($profil): void
    {
        $this->profil = $profil;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPasssword(): string
    {
        return $this->passsword;
    }

    /**
     * @param string $passsword
     */
    public function setPasssword(string $passsword): void
    {
        $this->passsword = $passsword;
    }

    /**
     * @return string
     */
    public function getServices(): string
    {
        return $this->services;
    }

    /**
     * @param string $services
     */
    public function setServices(string $services): void
    {
        $this->services = $services;
    }

}