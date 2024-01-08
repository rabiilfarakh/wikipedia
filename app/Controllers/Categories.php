<?php

class Categories extends Controller {
    
    public function addCategorie(){
        if (isset($_POST['creerCat'])) {
            $name = $_POST['nomCategorie'];
    
            if (!empty($name)) {
                $categorieObject = $this->model('categorie');
                $result = $categorieObject->addCategorie($name);
    
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