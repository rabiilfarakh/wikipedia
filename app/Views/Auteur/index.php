<?php 
require_once __DIR__ . '/../../Views/components/headerAut.php';


?>


<main class="">
  <section class="categories">
    <div class="categorie">
    <?php
      foreach ($data["categories"] as $categorie) {
    ?>
    <button id="btn" value="<?php echo $categorie->__get('idCategorie') ?>"><strong><?php echo $categorie->__get('nameCategorie') ?></strong></button>
    <?php
      } 
    ?>
    </div>
    <div class="icon" id="openPopup">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg>
    </div>
    </section>
  <div class="d-flex justify-content-around">
      <div class="wiki">
          <?php 
              foreach($data["wikis"] as $wiki){
            ?>
          <section class="divT mt-5 d-flex ">
            
            <div class="article" >
              <div style="width: 60%;" class="div1">
                <h1 style="font-size: 50px;"><strong><?php echo $wiki->__get('nameWiki') ?></strong></h1>
                <h2 style="font-size: 20px;">Written by <strong><?php echo $wiki->__get('nameUser') ?></strong>  on <strong><?php echo $wiki->__get('dateWiki') ?></strong>  in Blogger, Images, Tag </h2>
                <p>
                  <?php echo $wiki->__get('contentWiki') ?>
                </p>

              </div>
              <div style="width: 40%;" class="div2">
              
                <img src = "data:image/jpeg;base64,<?php echo $wiki->__get('image')?>">
                
                <form method="POST" action="more">
                  <button value="<?php echo $wiki->__get('idWiki')?>" name="more" style="text-decoration: underline; float:right ; padding: 0 36px 26px ">Read More</button>
                </form>
                <?php
                  if($_SESSION['id'] == $wiki->__get('idUser')){
                ?>
                <form  method="POST" action="deleteWiki">
                  <button   name="deleteWiki" value="<?php echo $wiki->__get('idWiki') ?>" style=" color:red; cursor: pointer ; text-decoration: underline; float:right ; padding: 0 36px 26px " href="#">Supprimer</button>
                </form>
                <?php } ?>
                
              </div>
            </div>
          </section>

              <?php  } ?>

   
        </div>
    

          <section class="divT mt-5 d-flex flex-column justify-content-center align-items-center" style="width:20%;">
            <h1 style="font-size: 50px;text-decoration: underline"><strong>3 New Wikis</strong></h1>
            <?php foreach($data["lastWikis"] as $last) {?>
            <div class="article d-flex flex-column" style="width: 100%; height:auto" >
              <div style="width: 60%;" class="div1">
                <h1 style="font-size: 40px;"><strong><?php echo $last->__get('nameWiki') ?></strong></h1>
                  <img style="width: 100%; height:50%" src = "data:image/jpeg;base64,<?php echo $last->__get('image')?>">
                </div>
                <h2 style="font-size: 18px;">Written by <strong><?php echo $last->__get('nameUser') ?></strong>  on <strong><?php echo $last->__get('dateWiki') ?></strong>  in Blogger, Images, Tag </h2>
                <form method="POST" action="more">
                  <button value="<?php echo $last->__get('idWiki')?>" name="more" style="text-decoration: underline; float:right ; padding: 0 36px 26px ;font-size:12px ">Read_More</button>
                </form>
              </div>

            
            <?php } ?>
          </section>

            
   

  </div>

  <!-- Popup -->
  <div class="popup" id="popup">
    <div class="popup-content">
      <form action="CreerWiki" method="POST" enctype="multipart/form-data">
        <label>Sélectionnez la Catégorie :</label>
          <select  name="selectCat" class="form-control">
          <?php
            foreach($data["categories"] as $categorie) {
              echo "<option value='{$categorie->__get('idCategorie')}'>{$categorie->__get('nameCategorie')}</option>";
            }
            ?>
          </select>
        <label for="wikiTitle">Titre du Wiki:</label>
        <input type="text" id="wikiTitle" name="titre" placeholder="Exemple :   ">
        <label for="wikiTitle">Image du Wiki:</label>
        <input id="file"  type="file" name="myFile" class="drop-zone__input mb-3" multiple> 
        <label for="wikiContent">Contenu du Wiki:</label>
        <textarea id="wikiContent" name="content" placeholder="Texte"></textarea>
        <label for="tags">Tags du Wiki:</label> 
        <div class="checkbox ">
          
          <?php
            foreach($data["tags"] as $tag) {
              echo '<div class="chek">';
              echo '<input  id="box" type="checkbox" value="'.$tag->__get('idTag').'" name="tag[]">';
              echo $tag->__get('nameTag');
              echo "</div>";
            }
        ?>
        </div>
        <button type="submit" name="creerWiki">Créer Wiki</button>
      </form>
      <button id = "fermer" onclick="closePopup()">Fermer</button>
    </div>
  </div>


</main>
<?php 
require_once __DIR__ . '/../../Views/components/footer.php';
?>

<script src="./../../public/assets/js/auteur.js"></script>
