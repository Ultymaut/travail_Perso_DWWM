<?php

require_once 'Profile.class.php';

/**
 * 
 * Classe User
 * #LUCAS VO
 */

class User extends Personne {
    private int $id_user;
    private Profile $profile;
    private float $solde;

    /**
     * 
     * Constructeur class __construct;
     */

    public function __construct(string $nom,string $prenom, string $dateNaissance,float $solde, Profile $profile)
    {
        $this->nom = $nom;
        $this->prenom=$prenom;
        $this->dateNaissance = $dateNaissance;
        $this->profile =$profile;
        $this -> solde = $solde;
    }

    /**
     * 
     * Methode __toString()
     * @return string 
     */

    public function __toString(): string
    {
        return parent::__toString()." *solde :".$this->solde." €";
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of profile
     */ 
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set the value of profile
     *
     * @return  self
     */ 
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }
}