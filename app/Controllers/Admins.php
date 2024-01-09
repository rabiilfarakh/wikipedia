<?php

class Admins extends Controller {
    
    public function index () {
        $categorie = $this->model('Categorie');
        $categories = $categorie->getAllCategorie();
        $tag = $this->model('Tag');
        $tags = $tag->getAllTag();
        $this->view('Admin/index',$data=["categories" => $categories , "tags" => $tags ]);
    }


    


} 
