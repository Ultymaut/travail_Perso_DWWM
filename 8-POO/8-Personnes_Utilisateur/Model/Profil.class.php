<?php

/*class Profil afin de créer un profil au sein de la class Utilisateur*/
class Profil{
    private static int $id;
    private string $code;
    private string $libelle;

    public function __construct($code,$libelle)
    {
        $this->code = $code;
        $this->libelle=$libelle;
    }
    public function __auto(){
        self::$id++;
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
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libele
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

}