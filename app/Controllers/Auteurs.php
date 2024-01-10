<?php

class Auteurs extends Controller {
    
    public function index () {

        $categorie = $this->model('Categorie');
        $categories = $categorie->getAllCategorie();

        $this->view('Auteur/index',$data=["categories" => $categories]);
    }


} 
