<?php

class Tags extends Controller {
    
    public function addTag(){
        if (isset($_POST['creerTag'])) {
            $name = $_POST['nomTag'];
    
            if (!empty($name)) {
                $TagObject = $this->model('Tag');
                $result = $TagObject->addTag($name);
    
                if ($result) {
                    echo "<script>alert('Tag ajoutée avec succès');</script>";
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

    public function modifierTag(){
        if(isset($_POST['modifierTag'])){
            $idTag = $_POST['selectTag'];
            $nameTag = $_POST['nouveauTag'];
            if(!empty($nameTag)){

                $TagObject = $this->model('Tag');
                $result = $TagObject->modifierTag($idTag,$nameTag);

                if ($result) {
                    echo "<script>alert('Tag modifié avec succès');</script>";
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

        public function supprimerTag(){
        if(isset($_POST['supprimerTag'])){
            $idTag = $_POST['selectTag'];

                $TagObject = $this->model('Tag');
                $result = $TagObject->supprimerTag($idTag);

                if ($result) {
                    echo "<script>alert('Tag supprimé avec succès');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                } else {
                    echo "<script>alert('Erreur de suppression');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '/wikipedia/public/admins/index'; }, 100);</script>";
                }

        }
    }

}