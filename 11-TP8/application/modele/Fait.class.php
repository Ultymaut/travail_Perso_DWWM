<?php
include_once "User.class.php";
include_once "Infraction.class.php";
//BAPTISTE
class Fait{
    private int $id;
    private User $user;
    private Infraction $infraction;
    private String $date;
    public function __construct($user,$infraction)
    {
        $this->user = $user;
        $this->infraction = $infraction;
        $this->date = date('Y-m-d h:m:s');
        $this->id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return Infraction
     */
    public function getInfraction(): Infraction
    {
        return $this->infraction;
    }

    /**
     * @param Infraction $infraction
     */
    public function setInfraction(Infraction $infraction): void
    {
        $this->infraction = $infraction;
    }

    /**
     * @return String
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param String $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

}