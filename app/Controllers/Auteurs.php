<?php

class Auteurs extends Controller {
    
    public function index () {

        $categorie = $this->model('Categorie');
        $categories = $categorie->getAllCategorie();
        $tag = $this->model('Tag');
        $tags = $tag->getAllTag();
        $wiki = $this->model('Wiki');
        $wikis = $wiki->getAllWiki();
        $lastWikis = $wiki->lastWikis();
    
        if(isset($_SESSION['user']) && isset($_SESSION['id']))
            $this->view('Auteur/index',$data=["categories" => $categories , "tags" => $tags , "wikis" => $wikis, "lastWikis" => $lastWikis]);
        else
            header('location: http://localhost/wikipedia/public/users/login');
        
    }

    public function CreerWiki(){
        if(isset($_POST['creerWiki'])){
            $tags = isset($_POST['tag']) ? $_POST['tag'] : [];

            $auteurObject = $this->model('Auteur');

           if($_FILES['myFile']['error'] === UPLOAD_ERR_OK){
            $img = $_FILES['myFile']['tmp_name'];
            $image = file_get_contents($img);
           }

            $lastId = $auteurObject->CreerWiki($_POST['titre'], $_POST['content'], $_SESSION['id'], $_POST['selectCat'],$image);
    
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


    public function updateWiki() {
        if (isset($_POST['updateWiki'])) {
            $tags = isset($_POST['tag']) ? $_POST['tag'] : [];
    
            $auteurObject = $this->model('Auteur');
    
            if ($_FILES['myFile']['error'] === UPLOAD_ERR_OK) {
                $img = $_FILES['myFile']['tmp_name'];
                $image = file_get_contents($img);
            }
    
            $wikiId = isset($_POST['wikiId']) ? $_POST['wikiId'] : null;
    
            $result = $auteurObject->updateWiki($_POST['titre'], $_POST['content'], $_SESSION['id'], $_POST['selectCat'], $image, $wikiId);
    
            if ($result) {

                $auteurObject->delete_tags_wikis($wikiId);

                foreach ($tags as $tagId) {
                    $result2 = $auteurObject->Update_tags_wikis($tagId, $wikiId);
                    if (!$result2) {
                        echo '<script>alert("Erreur lors de la mise à jour des tags pour le wiki.");</script>';
                    }
                }
    
                echo '<script>alert("Wiki mis à jour avec succès!");</script>';
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/auteurs/index'; }, 100);</script>";
            } else {
                echo '<script>alert("La mise à jour du wiki a échoué.");</script>';
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/auteurs/index'; }, 100);</script>";
            }
        }
    }
    
    

    public function deleteWiki(){
        if (isset($_POST["deleteWiki"])) {
            $wikiObject = $this->model('auteur');
            $wikiObject->deleteWiki($_POST['deleteWiki']);

            if ($wikiObject->deleteWiki($_POST['deleteWiki']) == true) {
                echo '<script>alert("wiki supprimé avec succé");</script>';
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/auteurs/index'; }, 100);</script>";
            }else{
                echo '<script>alert("erreur lors de suppression de wiki");</script>';
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/auteurs/index'; }, 100);</script>";
            }
    }
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
            $this->view('Auteur/wiki', $data=["categories" => $categories , "tags" => $tags , "wikis" => $wikis]);
            
        }
    }
}



    public function searchAjax(){
        $wiki = $this->model('Wiki');
        $wikis = $wiki->search($_POST['input']);
        $this->view('Auteur/search', $data=["wikis" => $wikis]);
    }




} 
