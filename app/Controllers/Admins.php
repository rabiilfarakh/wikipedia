<?php

class Admins extends Controller {
    
    public function index () {
        $categorie = $this->model('Categorie');
        $categories = $categorie->getAllCategorie();
        $this->view('Admin/index',$data=["categories" => $categories]);
    }


    


} 
