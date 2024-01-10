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
            $query = "SELECT * FROM Wikis";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $Wikis = [];

            foreach ($result as $row) {
                $Wiki = new Wiki();
                $Wiki->__set('idWiki', $row['idWiki']);
                $Wiki->__set('nameWiki', $row['nameWiki']);
                
                $Wikis[] = $Wiki;
            }
            return $Wikis;

        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    public function modifierWiki($idWiki,$nameWiki){
        try{

            $query = "UPDATE wikis SET nameWiki = ? WHERE idWiki = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$nameWiki);
            $stmt->bindParam(2,$idWiki);
            return $stmt->execute();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    
    public function supprimerWiki($idWiki){
        try{

            $query = "DELETE FROM wikis  WHERE idWiki = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$idWiki);
            return $stmt->execute();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }


}