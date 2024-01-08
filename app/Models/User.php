<?php
require_once 'database.php';


class User {

    private $idUser;
    private $nameUser;
    private $emailUser;
    private $pwdUser;
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

    
    public function signup($name,$email,$pwd){
        try {
            
            $query = "INSERT INTO utilisateurs (nameUser,emailUser,pwdUser,role) VALUES (?,?,?,'auteur')";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $pwd);

            return $stmt->execute();
        } catch (PDOException $ex) {
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    public function login($email, $pwd) {
        try {
            $query = "SELECT * FROM utilisateurs WHERE emailUser = :email AND pwdUser = :pwd";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pwd', $pwd);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }



}