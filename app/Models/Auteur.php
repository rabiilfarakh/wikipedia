<?php
require_once 'database.php';
require_once 'User.php';


class Auteur extends User{

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

    public function CreerWiki($titre, $content, $idUser, $idCategorie , $image){
        try {
            $query = "INSERT INTO wikis (nameWiki, contentWiki, idUser, idCategorie,image) VALUES (?, ?, ?, ?,?)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1, $titre);
            $stmt->bindParam(2, $content);
            $stmt->bindParam(3, $idUser);
            $stmt->bindParam(4, $idCategorie);
            $stmt->bindParam(5, $image);
            $stmt->execute();

            return  $this->db->lastInsertId();
    
    
        } catch (PDOException $ex) {
            die("Erreur lors de la création du wiki : " . $ex->getMessage());
        }
    }
    

    public function tags_wikis($idTag,$idWiki){
        try{
            $query = "INSERT INTO tags_wikis (idTag,idWiki) VALUES (?,?)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1,$idTag);
            $stmt->bindParam(2,$idWiki);
            
            return $stmt->execute();

        } catch (PDOException $ex) {
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    public function deleteWiki($idWiki){
        try{
            $query = "DELETE FROM tags_wikis  WHERE idWiki = ?";
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

    




}