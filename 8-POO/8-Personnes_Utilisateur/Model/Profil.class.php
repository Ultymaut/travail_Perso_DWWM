<?php
class Profil{
    private Utilisateur $utilisateur;
    private static int $id;
    private string $code;
    private string $libele;

    public function __construct($code,$libele,$nom, $prenom, $mail, $tel, $salaire,$login,$passsword,$services)
    {
        self::$id++;
        $this->code = $code;
        $this->libele=$libele;
        $this-> utilisateur = new Utilisateur($nom, $prenom, $mail, $tel, $salaire,$login,$passsword,$services);
    }

    /**
     * @return Utilisateur
     */
    public function getUtilisateur(): Utilisateur
    {
        return $this->utilisateur;
    }

    /**
     * @param Utilisateur $utilisateur
     */
    public function setUtilisateur(Utilisateur $utilisateur): void
    {
        $this->utilisateur = $utilisateur;
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
    public function getLibele(): string
    {
        return $this->libele;
    }

    /**
     * @param string $libele
     */
    public function setLibele(string $libele): void
    {
        $this->libele = $libele;
    }

}