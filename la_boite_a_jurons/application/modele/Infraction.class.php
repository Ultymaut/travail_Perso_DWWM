<?php

/**
 * 
 * Classe profile
 * # MA Mounir
 */

class Infraction
{
    private int $id_infraction=0;
    private float $montant;
    private string $type;
    private string $dateH;

    /**
     * 
     * Constructeur infraction 
     */

    public function __construct($type, $montant)
    {
        $this->type = $type;
        $this->montant = $montant;
        $this->dateH = date('Y-m-d h:m:s');
    }

    /**
     * 
     * Methode __toString()
     * @return string 
     */

    public function __toString(): string
    {
        return   "\n".$this->type.", ".$this->montant." €, ". $this->dateH;
    }

    /**
     * Get the value of id_infraction
     */
    public function getId_infraction()
    {
        return $this->id_infraction;
    }

    /**
     * Set the value of id_infraction
     *
     * @return  self
     */
    public function setId_infraction(int $id_infraction)
    {
        $this->id_infraction = $id_infraction;

        return $this;
    }

    /**
     * Get the value of montant
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of dateH
     */
    public function getdateH()
    {
        return $this->dateH;
    }

    /**
     * Set the value of dateH
     *
     * @return  self
     */
    public function setdateH($dateH)
    {
        $this->dateH = $dateH;

        return $this;
    }
}
