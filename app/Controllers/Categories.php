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

    public function modifierCategorie(){
        if(isset($_POST['modifierCat'])){
            $idCategorie = $_POST['selectCategorie'];
            $nameCategorie = $_POST['nouveauCategorie'];
            if(!empty($nameCategorie)){

                $categorieObject = $this->model('categorie');
                $result = $categorieObject->modifierCategorie($idCategorie,$nameCategorie);

                if ($result) {
                    echo "<script>alert('Catégorie modifié avec succès');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                } else {
                    echo "<script>alert('Erreur de modification');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                }

            }else {
                echo "<script>alert('Champ vide');</script>";
                echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
        }
        }
    }

        public function supprimerCategorie(){
        if(isset($_POST['supprimerCat'])){
            $idCategorie = $_POST['selectCategorie'];

                $categorieObject = $this->model('categorie');
                $result = $categorieObject->supprimerCategorie($idCategorie);

                if ($result) {
                    echo "<script>alert('Catégorie supprimé avec succès');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                } else {
                    echo "<script>alert('Erreur de suppression');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                }

        }
    }

}