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
            $user = $userObject->login($_POST['email'], $_POST['pwd']);
            
            if ($user !== null && password_verify($_POST['pwd'], $user->__get('pwdUser'))) {
                $_SESSION['user'] = $user->__get('nameUser');
                $_SESSION['id'] = $user->__get('idUser');
    
                if ($user->__get('role') == "admin") {
                    header('location: http://localhost/wikipedia/public/admins/index');
                } else if ($user->__get('role') == "auteur") {
                    header('location: http://localhost/wikipedia/public/auteurs/index');
                }
            } else {
         
                echo "<script>alert('Mot de passe incorrect ou utilisateur non trouvé');</script>";
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/users/login'; }, 100);</script>";
            }
        }
    }
      
    
    public function logout(){
        session_start();
        session_destroy();
        header('location: http://localhost/wikipedia/public/users/login');
        $this->view("authentification/login");
    }

    
}

