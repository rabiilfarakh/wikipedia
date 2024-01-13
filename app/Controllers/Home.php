<?php

class home extends Controller {
    
    public function index () {

        $categorie = $this->model('Categorie');
        $categories = $categorie->getAllCategorie();
        $tag = $this->model('Tag');
        $tags = $tag->getAllTag();
        $wiki = $this->model('Wiki');
        $wikis = $wiki->getAllWiki();
        $lastWikis = $wiki->lastWikis();

        $this->view('Home/index',$data=["categories" => $categories , "tags" => $tags , "wikis" => $wikis , "lastWikis" => $lastWikis]);

    }


}