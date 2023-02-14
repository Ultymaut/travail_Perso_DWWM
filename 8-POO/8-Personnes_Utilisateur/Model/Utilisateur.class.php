<?php

class Utilisateur extends Personne{
    private string $login;
    private string $passsword;
    private string $services;
    public function __construct($nom, $prenom, $mail, $tel, $salaire,$login,$passsword,$services)
    {
        parent::__construct($nom, $prenom, $mail, $tel, $salaire);
        $this ->login = $login;
        $this ->passsword = $passsword;
        $this ->services = $services;
    }
    public function __toString()
    {
        if ($this->services=="Manager"){
             return parent::__toString();
        }

    }
    public function calculSalaire(): float
    {
        if ($this->services == "Manager"){
            $this->salaire += $this->salaire * 10/100;
        } elseif ($this->services == "Directeur"){
            $this->salaire += $this->salaire * 40/100;
        }
        return parent::__calculSalaire();
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