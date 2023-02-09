<?php
/*création d'un classe Cercle avec differentes methodes pour différents calaculs*/
class Point
{
    private $abcisse;
    private $ordonnee;

    public function __construct($x, $y)
    {
        $this->abcisse = $x;
        $this->ordonnee = $y;
    }
    /**
     * Get the value of abcisse
     */
    public function getAbcisse()
    {
        return $this->abcisse;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */
    public function setAbcisse($abcisse)
    {
        $this->abcisse = $abcisse;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */
    public function getordonnee()
    {
        return $this->ordonnee;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */
    public function setordonnee($ordonnee)
    {
        $this->ordonnee = $ordonnee;

        return $this;
    }

    public function afficher()
    {
        $x = $this->getAbcisse();
        $y = $this->getordonnee();
        echo "POINT($x,$y)\n";
    }
}
