<?php

class Users extends Controller {

    public function login(){
        $this->view('authentification/login');
    }

    public function signup(){
        $this->view("authentification/signup");
    }

    public function checkSignup(){
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['tryPwd'])) {
            
                if($_POST['pwd'] == $_POST['tryPwd']){

                    $userObject = $this->model("user");
                    $result = $userObject->signup($_POST['name'],$_POST['email'], $_POST['pwd'],$_POST['tryPwd']);

                    if ($result) {
                        $this->view("authentification/login");
                    } else {
                        $this->view("authentification/signup");
                    }
                }else{
                    $this->view("authentification/signup");
                }
         }else{
            $this->view("authentification/signup");
        }
    }

    public function checkLogin() {
        
            if (isset($_POST['email']) && isset($_POST['pwd'])) {
                
                $userObject = $this->model("user");
                $result = $userObject->login($_POST['email'], $_POST['pwd']);
    
                if (is_array($result) && count($result) > 0) {

                        if ($result['role'] == "admin") {
                            $_SESSION['user'] = "admin";
                            header('location: http://localhost/wikipedia/public/admins/index');
                        } else {
                            $this->view("auteur/index");
                            $_SESSION["user"]= "auteur";
                            header('location: http://localhost/wikipedia/public/auteurs/index');
                        }

                    }else{
                        header('location: http://localhost/wikipedia/public/users/login');
                    }
                } else {
                     header('location: http://localhost/wikipedia/public/users/login');
                }
    }
    
    public function logout(){
        session_start();
        session_destroy();
        header('location: http://localhost/wikipedia/public/users/login');
        $this->view("authentification/login");
    }

    
}

