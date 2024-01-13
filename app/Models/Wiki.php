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
    private $nameCategorie;
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

            $query = "SELECT w.*, u.nameUser, u.idUser, c.nameCategorie
                      FROM utilisateurs u
                      JOIN wikis w ON u.idUser = w.idUser
                      JOIN categories c ON w.idCategorie = c.idCategorie
                      WHERE w.idWiki = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1, $idWiki);
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
                $Wiki->__set('nameCategorie', $row['nameCategorie']);
    
                $tagQuery = "SELECT t.nameTag
                             FROM tags_wikis tw
                             JOIN tags t ON t.idTag = tw.idTag
                             WHERE tw.idWiki = ?";
                $tagStmt = $this->db->prepare($tagQuery);
                $tagStmt->bindParam(1, $idWiki);
                $tagStmt->execute();
                $tags = $tagStmt->fetchAll(PDO::FETCH_ASSOC);
    
                $tagNames = [];
                foreach ($tags as $tag) {
                    $tagNames[] = $tag['nameTag'];
                }
    
                $Wiki->__set('tags', $tagNames);
                $Wikis[] = $Wiki;
            }
    
            return $Wikis;
    
        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }
    

    public function totaleWiki(){
        try{
            $query = "SELECT COUNT(idWiki)  as countWiki FROM wikis";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetch();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    public function archiver($idWiki){
        try{
            $query = "UPDATE wikis
                SET statut = 0 WHERE idWiki = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$idWiki);
            $stmt->execute();

            $query2 = "DELETE FROM wikis  WHERE idWiki = ?";
            $stmt2 = $this->db->prepare($query2);
            $stmt2->bindParam(1,$idWiki);
            
            return $stmt2->execute();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    public function search($input){
        try{
            $query = "SELECT w.* FROM wikis w
            JOIN categories c ON c.idCategorie = w.idCategorie
            JOIN tags_wikis tw ON tw.idWiki = w.idWiki 
            JOIN tags t ON t.idTag = tw.idTag
            WHERE  w.nameWiki LIKE :input OR c.nameCategorie LIKE :input OR t.nameTag LIKE :input";
    
            $stmt = $this->db->prepare($query);
            $inputParam = '%'. $input . '%'; 
            $stmt->bindParam(':input', $inputParam, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $Wikis = [];
    
            foreach ($result as $row) {
                $Wiki = new Wiki();
                $image = $row['image'];
                $image64 = base64_encode($image);
                $Wiki->__set('nameWiki', $row['nameWiki']);
                $Wiki->__set('image', $image64);
                $Wiki->__set('idWiki', $row['idWiki']);
                $Wikis[] = $Wiki;
            }
            return $Wikis;
    
        } catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }
    





    

}