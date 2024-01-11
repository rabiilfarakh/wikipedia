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

    public function CreerWiki($titre, $content, $idUser, $idCategorie){
        try {
            $query = "INSERT INTO wikis (nameWiki, contentWiki, idUser, idCategorie) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1, $titre);
            $stmt->bindParam(2, $content);
            $stmt->bindParam(3, $idUser);
            $stmt->bindParam(4, $idCategorie);
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



}