<?php

class Auteurs extends Controller {
    
    public function index () {

        $categorie = $this->model('Categorie');
        $categories = $categorie->getAllCategorie();
        $tag = $this->model('Tag');
        $tags = $tag->getAllTag();
        if(isset($_SESSION['user']) && isset($_SESSION['id']))
            $this->view('Auteur/index',$data=["categories" => $categories , "tags" => $tags]);
        else
            header('location: http://localhost/wikipedia/public/users/login');
        
    }

    public function CreerWiki(){
        if(isset($_POST['creerWiki'])){
            $tags = isset($_POST['tag']) ? $_POST['tag'] : [];

            $auteurObject = $this->model('Auteur');
            $lastId = $auteurObject->CreerWiki($_POST['titre'], $_POST['content'], $_SESSION['id'], $_POST['selectCat']);
    
            if ($lastId) {
                foreach ($tags as $tagId) {
                    $result = $auteurObject->tags_wikis($tagId, $lastId);
                    if (!$result) {
                        echo '<script>alert("Erreur lors de l\'ajout de tags au wiki.");</script>';
                    }
                }
    
                echo '<script>alert("Wiki créé avec succès!");</script>';
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/auteurs/index'; }, 100);</script>";
            } else {
                echo '<script>alert("La création du wiki a échoué.");</script>';
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/auteurs/index'; }, 100);</script>";
            }
        }
    }
    
    


} 
