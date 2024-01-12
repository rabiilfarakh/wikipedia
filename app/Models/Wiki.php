<?php
require_once 'database.php';


class Wiki {

    private $idWiki;
    private $nameWiki;
    private $contentWiki;
    private $dateWiki;
    private $statut;
    private $idUser;
    private $idCategorie;
    private $image;
    private $nameUser;
    private $db;

    public function __construct() {
        $this->db = DATABASE::getconnection();
    }

    public function __get($parametre){
        return $this->$parametre;
    }

    public function __set($parametre, $value){
        $this->$parametre = $value;
    }
    
    public function addWiki($name){
        try{

            $query = "INSERT INTO Wikis (nameWiki) values (?)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$name);
            
            return $stmt->execute();

        } catch (PDOException $ex) {
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    public function getAllWiki() {

        try {
            $query = "SELECT w.* , u.nameUser , u.idUser from utilisateurs u 
                    join wikis w on u.idUser = w.idUser";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $Wikis = [];

            foreach ($result as $row) {
                $Wiki = new Wiki();
                $Wiki->__set('idWiki', $row['idWiki']);
                $Wiki->__set('nameWiki', $row['nameWiki']);
                $Wiki->__set('contentWiki', $row['contentWiki']);
                $Wiki->__set('dateWiki', $row['dateWiki']);
                $Wiki->__set('statut', $row['statut']);
                $Wiki->__set('idUser', $row['idUser']);
                $Wiki->__set('idCategorie', $row['idCategorie']);
                $Wiki->__set('image', $row['image']);
                $Wiki->__set('nameUser', $row['nameUser']);
                $Wikis[] = $Wiki;
            }
            return $Wikis;

        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    // public function deleteWiki($idWiki){
    //     try {
    //         $query = "DELETE FROM tags_wikis WHERE idWiki = ?";
    //         $stmt = $this->db->prepare($query);
    //         $stmt->bindParam(1, $idWiki);
    //         $stmt->execute();

    //         $query2 = "DELETE FROM wikis WHERE idWiki = ?";
    //         $stmt2 = $this->db->prepare($query2); 
    //         $stmt2->bindParam(1, $idWiki);
    //         return $stmt->execute();
    //     } catch (PDOException $ex) {
    //         die("Error in finding by a column: " . $ex->getMessage());
    //     }
    // }
    

    

}