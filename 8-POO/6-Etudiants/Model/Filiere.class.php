<?php
/*class Filiere avec parametre pour le nom de la filiere*/
class Filiere {
    static int $id;
    private string $libele;
    public function __construct(string $libele)
    {
        $this -> libele = $libele;
    }
    public function id(){
        self::$id++;
    }
    /*resort la chaine de caractere aves les params*/
    public function __toString(){
        return "Filiere : $this->libele";
    }
    /**
     * @return int
     */
    public static function getId(): int
    {
        return self::$id;
    }

    /**
     * @param int $id
     */
    public static function setId(int $id): void
    {
        self::$id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibele()
    {
        return $this->libele;
    }

    /**
     * @param mixed $libele
     */
    public function setLibele($libele): void
    {
        $this->libele = $libele;
    }

}