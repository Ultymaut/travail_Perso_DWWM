<?php
//Class Employe qui a certains attributs est certaines methodes pour répondres aux demandes.
class Employe{
    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaiss;
    private string $dateEmbauche;
    private float $salaire;

    public function __construct(int $matricule,string $nom,string $prenom,string $dateNaiss,string $dateEmbauche,float $salaire)
    {
        $this->matricule=$matricule;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaiss=$dateNaiss;
        $this->dateEmbauche=$dateEmbauche;
        $this->salaire=$salaire;
    }

//Calcul l'age
    public function age() :int{
        $dateNaiss = $this->getDateNaiss();
        $date_ajd = date_create(date("d-m-Y"));
        $date =date_create($dateNaiss);
        $age = $date -> diff($date_ajd) ->format ('%y');
        return $age;
    }

//Calcul l'ancienneté
    public function anciennete() :int{
        $dateEmbauche= $this->getDateEmbauche();
        $date_ajd = date_create(date("d-m-Y"));
        $date =date_create($dateEmbauche);
        $anciennete= $date -> diff($date_ajd) ->format ('%y');
        return $anciennete;
    }

//calcul une augmentation de salaire
    public function augmentationSalaire() :int{
        $dateEmbauche=$this->getDateEmbauche();
        $salaire = $this->getSalaire();
        $anciennete = $this->anciennete();
        if ($anciennete<5){
            $this->salaire += (2/100) * $salaire;
            return $salaire;
        }elseif (5< $anciennete AND $anciennete<=10){
            $this->salaire += (5/100)* $salaire;
            return $salaire;
        }else{
            $this->salaire += (10/100)* $salaire;
            return $salaire;
        }
    }

//Affiche un resumé des infos de l'employé
    public function afficherEmployer() :void{
        $matricule = $this->getMatricule();
        $nom = $this ->getNom();
        $prenom = $this ->getPrenom();
        $dateNaiss = $this->getDateNaiss();
        $dateEmbauche=$this->getDateEmbauche();
        $salaire = $this->getSalaire();
        $anciennete = $this->anciennete();
        $age = $this->age();
        $anciennete = $this ->anciennete();
        echo "╔═══════════════════════════════════════════════════╗\n";
        echo "║\n";
        echo "╠Fiche employé \n";
        echo "║\n";
        echo "╠Matricule : #$matricule \n"."║\n"."╠Nom complet : ".strtoupper($nom)." ".ucfirst($prenom)."\n"."║\n"."╠Age : $age an(s)\n"."║\n"."╠Ancienneté : $anciennete an(s)\n"."║\n"."╠Salaire : $salaire €"."\n";
        echo "║\n";
        echo "╚═══════════════════════════════════════════════════╝\n\n";
    }

    /**
     * @return mixed
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param mixed $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * @param mixed $dateNaiss
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;
    }

    /**
     * @return mixed
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * @param mixed $dateEmbauche
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

}