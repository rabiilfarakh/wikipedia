<?php

class Wikis extends Controller {
    
    public function archiverWiki(){
        if (isset($_POST['archiverWiki'])) {
    
            if (!empty($_POST['selectWiki'])) {
                $WikiObject = $this->model('Wiki');
                $result = $WikiObject->archiver($_POST['selectWiki']);
    
                if ($result) {
                    echo "<script>alert('Wiki archivé avec succès');</script>";
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