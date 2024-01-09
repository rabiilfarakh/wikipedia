<?php
require_once 'database.php';


class Tag {

    private $idTag;
    private $nameTag;
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
    
    public function addTag($name){
        try{

            $query = "INSERT INTO Tags (nameTag) values (?)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$name);
            
            return $stmt->execute();

        } catch (PDOException $ex) {
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    public function getAllTag() {

        try {
            $query = "SELECT * FROM Tags";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $tags = [];

            foreach ($result as $row) {
                $tag = new tag();
                $tag->__set('idTag', $row['idTag']);
                $tag->__set('nameTag', $row['nameTag']);
                
                $tags[] = $tag;
            }
            return $tags;

        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    public function modifierTag($idTag,$nameTag){
        try{

            $query = "UPDATE Tags SET nameTag = ? WHERE idTag = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$nameTag);
            $stmt->bindParam(2,$idTag);
            return $stmt->execute();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    
    public function supprimerTag($idTag){
        try{

            $query = "DELETE FROM Tags  WHERE idTag = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$idTag);
            return $stmt->execute();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }


}