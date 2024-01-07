<?php

class Auteurs extends Controller {
    
    public function index () {
        $this->view('Auteur/index');
    }

    public function signup(){
        $this->view("Authentification/signup");
    }

} 
