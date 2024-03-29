<?php
require_once 'database.php';


class Categorie {

    private $idCategorie;
    private $nameCategorie;
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
    
    public function addCategorie($name){
        try{

            $query = "INSERT INTO categories (nameCategorie) values (?)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$name);
            
            return $stmt->execute();

        } catch (PDOException $ex) {
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    public function getAllCategorie() {

        try {
            $query = "SELECT * FROM categories";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $categories = [];

            foreach ($result as $row) {
                $categorie = new categorie();
                $categorie->__set('idCategorie', $row['idCategorie']);
                $categorie->__set('nameCategorie', $row['nameCategorie']);
                
                $categories[] = $categorie;
            }
            return $categories;

        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }
    

    public function modifierCategorie($idCategorie,$nameCategorie){
        try{

            $query = "UPDATE categories SET nameCategorie = ? WHERE idCategorie = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$nameCategorie);
            $stmt->bindParam(2,$idCategorie);
            return $stmt->execute();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    
    public function supprimerCategorie($idCategorie){
        try{

            $query = "DELETE FROM categories  WHERE idCategorie = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$idCategorie);
            return $stmt->execute();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    public function totaleCategorie(){
        try{
            $query = "SELECT COUNT(idCategorie)  as countCategorie FROM Categories";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetch();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }


}