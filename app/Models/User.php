<?php
require_once 'database.php';


class User {

    private $idUser;
    private $nameUser;
    private $emailUser;
    private $pwdUser;
    private $role;
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

    
    public function signup($name, $email, $pwd) {
        try {
            
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
            $query = "INSERT INTO utilisateurs (nameUser, emailUser, pwdUser, role) VALUES (?, ?, ?, 'auteur')";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $hashedPwd);
    
            return $stmt->execute();
        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }
    

    public function login($email, $pwd) {
        try {
            $query = "SELECT * FROM utilisateurs WHERE emailUser = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($result) {
                $hashedPassword = $result['pwdUser'];
    
                if (password_verify($pwd, $hashedPassword)) {
                    $user = new User();
                    $user->__set('idUser', $result['idUser']);
                    $user->__set('nameUser', $result['nameUser']);
                    $user->__set('emailUser', $result['emailUser']);
                    $user->__set('pwdUser', $hashedPassword);
                    $user->__set('role', $result['role']);
    
                    return $user;
                }
            }
    
            return null;
    
        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }
    
    

    // public function getUser($email,$pwd){
    //     try {
    //         $query = "SELECT * FROM utilisateurs WHERE emailUser = ? and pwdUser = ?";
    //         $stmt = $this->db->prepare($query);
    //         $stmt->bindParam(':email', $email);
    //         $stmt->bindParam(':pwd', $pwd);
    //         $stmt->execute();
    //         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //         $users = [];

    //         foreach($result as $row){
    //             $user = new user();
    //             $user->__set('idUser',$row['idUser']);
    //             $user->__set('nameUser',$row['nameUser']);
    //             $user->__set('emailUser',$row['emailUser']);
    //             $user->__set('pwdUser',$row['pwdUser']);

    //             $users[] = $user;
    //         }

    //         return $users;
    //     } catch (PDOException $ex) {
    //         die("Error in finding by a column: " . $ex->getMessage());
    //     }
    // }

    public function getAllUser(){
        try {
            $query = "SELECT * FROM utilisateurs";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $users = [];

            foreach($result as $row){
                $user = new user();
                $user->__set('idUser',$row['idUser']);
                $user->__set('nameUser',$row['nameUser']);
                $user->__set('emailUser',$row['emailUser']);
                $user->__set('pwdUser',$row['pwdUser']);

                $users[] = $user;
            }

            return $users;
        } catch (PDOException $ex) {
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }

    public function totaleUser(){
        try{
            $query = "SELECT COUNT(idUser)  as countUser FROM utilisateurs";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetch();

        }catch(PDOException $ex){
            die("Error in finding by a column: " . $ex->getMessage());
        }
    }



}