<?php

class Point{
    private $abscisse;
    private $ordonne;
    public function __construct($abscisse,$ordonne)
    {
        $this->abscisse = $abscisse;
        $this->ordonne = $ordonne;
    }
    function norme():float {
        $x = $this->getAbscisse();
        $y = $this->getOrdonne();
        return  sqrt(($x**2)+($y**2));
    }
    /**
     * @return mixed
     */
    public function getAbscisse()
    {
        return $this->abscisse;
    }

    /**
     * @param mixed $abscisse
     */
    public function setAbscisse($abscisse)
    {
        $this->abscisse = $abscisse;
    }

    /**
     * @return mixed
     */
    public function getOrdonne()
    {
        return $this->ordonne;
    }

    /**
     * @param mixed $ordonne
     */
    public function setOrdonne($ordonne)
    {
        $this->ordonne = $ordonne;
    }

}