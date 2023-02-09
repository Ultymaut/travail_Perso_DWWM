<?php
include '../Model/Point.class.php';

/*Creation d'une classe point ave x et y en attributs*/
class Cercle
{

    private Point $_centre; //Objet de type Point
    private int $_rayon; //le rayon : int


public function __construct($abscisse, $ordonne, $rayon)
{
    $this->_centre = new Point($abscisse, $ordonne);
    $this->_rayon = $rayon;
}


    /**
     * Get the value of _centre
     */ 
    public function get_centre()
    {
        return $this->_centre;
    }

    /**
     * Set the value of _centre
     *
     * @return  self
     */ 
    public function set_centre($_centre)
    {
        $this->_centre = $_centre;

        return $this;
    }

    /**
     * Get the value of _rayon
     */ 
    public function get_rayon()
    {
        return $this->_rayon;
    }

    /**
     * Set the value of _rayon
     *
     * @return  self
     */ 
    public function set_rayon($_rayon)
    {
        $this->_rayon = $_rayon;

        return $this;
    }

    public function getPerimetre():float
    {
        $r=$this->get_rayon();
        $perimetre = (2*pi())*$r;
        return $perimetre;
    }
    
    public function getSurface():float
    {
        $r=$this->get_rayon();
        $surface = $r**2*pi();
        return $surface;
    }

    public function appartient ($abscisse,$ordonne)
    {
        $x = $this->_centre->getAbcisse();
        $y = $this->_centre->getordonnee();
        $r = $this->get_rayon();
        if (((($abscisse-$x)**2)+(($ordonne-$y)**2))<(($r)**2)){
            echo "Appartient au cercle";
        }else{
            echo "n'appartient pas au cercle";
        }
    }

    public function afficherCercle()
    {
        $r = $this->get_rayon();
        $abscisse = $this->_centre->getAbcisse();
        $ordonne = $this->_centre->getordonnee();
        $perimetre = $this->getPerimetre();
        $surface = $this ->getSurface();
        echo "CERCLE($abscisse,$ordonne,$r) \nLe périmetre est de : $perimetre \nLa surface est : $surface \nDonner un point : \n";
        
    }
}