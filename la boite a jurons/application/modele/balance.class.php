<?php
class balance extends User {
    private int $id_balance;
    private string $dateBalance;

    public function __construct(string $nom, string $prenom)
    {
        $dateNaissance = $this->getDateNaissance();
        $solde = $this->getSolde();
        $profile = $this->getProfile();
        parent::__construct($nom, $prenom, $dateNaissance, $solde, $profile);
        $this->dateBalance = date('Y-m-d h:m:s');
        $this->id_balance;
    }

    /**
     * @return int
     */
    public function getIdBalance(): int
    {
        return $this->id_balance;
    }

    /**
     * @param int $id_balance
     */
    public function setIdBalance(int $id_balance): void
    {
        $this->id_balance = $id_balance;
    }

    /**
     * @return string
     */
    public function getDateBalance(): string
    {
        return $this->dateBalance;
    }

    /**
     * @param string $dateBalance
     */
    public function setDateBalance(string $dateBalance): void
    {
        $this->dateBalance = $dateBalance;
    }


}