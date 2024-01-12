<?php

class Wikis extends Controller {
    
    public function archiverWiki(){
        if (isset($_POST['archiver'])) {
    
            if (!empty($_POST['archiver'])) {
                $WikiObject = $this->model('Wiki');
                $result = $WikiObject->archiverWiki($_POST['archiver']);
    
                if ($result) {
                    echo "<script>alert('Catégorie ajoutée avec succès');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                } else {
                    echo "<script>alert('Erreur d\'ajout');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                }
            } else {
                echo "<script>alert('Champ vide');</script>";
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
            }
        }
    }
}