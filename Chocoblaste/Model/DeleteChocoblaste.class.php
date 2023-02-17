<?php
class DeleteChocoblaste{
    private int $id;
    public function  __construct()
    {

    }
    public function deleteChocoblaste(): bool
    {
        //Chaine de connexion à la base de donnée
        $bdd = new PDO('mysql:host=localhost;dbname=chocoblaste;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // modification des données
        $id = $_POST['id'];
        $sql = "DELETE FROM Denver WHERE ID='$id'";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute();
        return $status;
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
}