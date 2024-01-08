<?php

class Auteurs extends Controller {
    
    public function index () {
        $this->view('Auteur/index');
    }

    // public function signup(){
    //     $this->view("auteur/signup");
    // }

    // public function checkSignup(){
    //     if (isset($_POST['inscrire'])) {
            
    //         $auteurObject = $this->model("auteur");
    //         $result = $auteurObject->signup($_POST['name'],$_POST['email'], $_POST['pwd']);
    //         if ($result) {
    //             $this->view("authentification/login");
    //         } else {
    //             echo "erreur lors de l'insertion";
    //         }

    //     }
    // }

} 
