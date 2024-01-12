<?php

class Admins extends Controller {
    
    public function index () {
        $categorie = $this->model('Categorie');
        $categories = $categorie->getAllCategorie();
        $totaleCategorie = $categorie->totaleCategorie();
        $tag = $this->model('Tag');
        $tags = $tag->getAllTag();
        $totaleTag = $tag->totaleTag();
        $wiki = $this->model('Wiki');
        $totaleWiki = $wiki->totaleWiki();
        $wikis = $wiki->getAllWiki();
        $user = $this->model('User');
        $users = $user->getAllUser();
        $totaleUser = $user->totaleUser();

        if(isset($_SESSION['user']) && isset($_SESSION['id']))
            $this->view('Admin/index',$data=["categories" => $categories , "tags" => $tags , "users" => $users , "totaleUser" => $totaleUser , "totaleWiki" => $totaleWiki, 'totaleTag' => $totaleTag , 'totaleCategorie' => $totaleCategorie, 'wikis' => $wikis]);
        else
            header('location: http://localhost/wikipedia/public/users/login');

    }



    


} 
