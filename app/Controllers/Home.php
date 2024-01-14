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

    public function more(){
        if(isset($_POST['more'])){
            $categorie = $this->model('Categorie');
            $categories = $categorie->getAllCategorie();
            
            $tag = $this->model('Tag');
            $tags = $tag->getAllTag();
            
            $wiki = $this->model('Wiki');
            $wikis = $wiki->getWiki($_POST['more']);
    
            if(isset($_SESSION['user']) && isset($_SESSION['id'])) {
                $this->view('Home/wiki', $data=["categories" => $categories , "tags" => $tags , "wikis" => $wikis]);
                
            }
        }
    }


}