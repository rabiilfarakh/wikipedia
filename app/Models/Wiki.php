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
                    join wikis w on u.idUser = w.idUser
                    WHERE w.statut = 1";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $Wikis = [];

            foreach ($result as $row) {
                $Wiki = new Wiki();
                $image = $row['image'];
                $image64 = base64_encode($image);
                $Wiki->__set('idWiki', $row['idWiki']);
                $Wiki->__set('nameWiki', $row['nameWiki']);
                $Wiki->__set('contentWiki', $row['contentWiki']);
                $Wiki->__set('dateWiki', $row['dateWiki']);
                $Wiki->__set('statut', $row['statut']);
                $Wiki->__set('idUser', $row['idUser']);
                $Wiki->__set('idCategorie', $row['idCategorie']);
                $Wiki->__set('image', $image64);
                $Wiki->__set('nameUser', $row['nameUser']);
                $Wikis[] = $Wiki;
            }
            return $Wikis;

        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }


    public function getWiki($idWiki) {
        try {
            $query = "SELECT w.* , u.nameUser , u.idUser from utilisateurs u 
                    join wikis w on u.idUser = w.idUser
                    WHERE w.idWiki = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$idWiki);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $Wikis = [];

            foreach ($result as $row) {
                $Wiki = new Wiki();
                $image = $row['image'];
                $image64 = base64_encode($image);
                $Wiki->__set('idWiki', $row['idWiki']);
                $Wiki->__set('nameWiki', $row['nameWiki']);
                $Wiki->__set('contentWiki', $row['contentWiki']);
                $Wiki->__set('dateWiki', $row['dateWiki']);
                $Wiki->__set('statut', $row['statut']);
                $Wiki->__set('idUser', $row['idUser']);
                $Wiki->__set('idCategorie', $row['idCategorie']);
                $Wiki->__set('image', $image64);
                $Wiki->__set('nameUser', $row['nameUser']);
                $Wikis[] = $Wiki;
            }
            return $Wikis;

        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    // public function archiverWiki($idWiki){
    //     try{

    //         $query = "UPDATE wikis SET statut = 0
    //                 WHERE idWiki = ?";
    //         $stmt = $this->db->prepare($query);
    //         $stmt->bindParam(1,$idWiki);
            
    //         return $stmt->execute();

    //     } catch (PDOException $ex) {
    //         die("error in finding by a column" . $ex->getMessage());
    //     }
    // }




    

}