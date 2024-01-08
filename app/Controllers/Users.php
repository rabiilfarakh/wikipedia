<?php

class Users extends Controller {

    public function login(){
        $this->view('authentification/login');
    }

    public function signup(){
        $this->view("authentification/signup");
    }

    public function checkSignup(){
        if (isset($_POST['inscrire'])) {
            
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['tryPwd'])){

                if($_POST['pwd'] == $_POST['tryPwd']){

                    $userObject = $this->model("user");
                    $result = $userObject->signup($_POST['name'],$_POST['email'], $_POST['pwd'],$_POST['tryPwd']);

                    if ($result) {
                        $this->view("authentification/login");
                    } else {
                        echo "<script>alert('erreur lors de l'insertion');</script>";
                        $this->view("authentification/signup");
                    }
                }else{
                    echo "<script>alert('mot de passe incorrecte');</script>";
                    $this->view("authentification/signup");
                }
         }else{
            echo "<script>alert('veuillez remplire tous les champs');</script>";
            $this->view("authentification/signup");
         }
        }
    }

    public function checkLogin() {
        if (isset($_POST['login'])) {
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
    
            if (!empty($email) && !empty($pwd)) {
                $userObject = $this->model("user");
                $result = $userObject->login($email, $pwd);
    
                if (is_array($result) && count($result) > 0) {

                        if ($result['role'] == "admin") {
                            $this->view("admin/index");
                        } else {
                            $this->view("auteur/index");
                        }

                    }else{
                        echo "<script>alert('email ou mot de passe incorrect');</script>";
                        $this->view("authentification/login");
                    }
                } else {
                     echo "<script>alert('veullez remplire tous les champs');</script>";
                     $this->view("authentification/login");
                }

        }
    }
    
}

