<?php
/* Creation d'une classe Rectangle pour verifier certaine info*/
class Rectangle{
    private $longueur;
    private $largueur;
    /* Creation d'un constructeur*/
    public function __construct($longueur,$largueur)
    {
        $this ->longueur  = $longueur ;
        $this ->largueur = $largueur ;
    }
    /* Creation de plusieurs methodes pour faire les calculs*/
    public function perimetre($longueur,$largueur):float{
       $longueur = $this ->getLongueur();
       $largueur = $this -> getLargueur();
        $perimetre = ($longueur+$largueur)*2;
        return $perimetre;
    }
    public function aire($longueur,$largueur):float{
        $longueur = $this ->getLongueur();
        $largueur = $this -> getLargueur();
        $aire = ($longueur*$largueur);
        return $aire;
    }
    public function estCarre($longueur,$largueur) : bool{
        $longueur = $this ->getLongueur();
        $largueur = $this -> getLargueur();
        if ($longueur==$largueur){
            return true;
        } else {
            return false;
        }
    }
    public function afficherRectangle() :string{
        $longueur = $this ->getLongueur();
        $largueur = $this -> getLargueur();
        $perimetre = $this-> perimetre($longueur,$largueur);
        $aire = $this-> aire($longueur,$largueur);
        $estCarre = $this-> estCarre($longueur,$largueur);
        if ($estCarre==true)
        {
            $affichage = "La longueur est de : $longueur cm\nLa largueur est de 5: $largueur cm\nLe périmetre est  de : $perimetre cm\nL'aire est de : $aire cm\nLe réctangle est un carre\n";
        } else{
            $affichage = "La longueur est de : $longueur cm\nLa largueur est de 5: $largueur cm\nLe périmetre est  de : $perimetre cm\nL'aire est de : $aire cm²\nLe réctangle n'est pas un carre\n";
        }
        return $affichage;

    }
    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargueur()
    {
        return $this->largueur;
    }

    /**
     * @param mixed $largueur
     */
    public function setLargueur($largueur)
    {
        $this->largueur = $largueur;
    }

}