<?php 
require_once __DIR__ . '/../../Views/components/headerAut.php';
?>


<main class=" ">
  <section class="categories">


  </section>
  <?php 
      foreach($data["wikis"] as $wiki){
    ?>
  <section class="divT">

    <div class="article">
      <div style="width: 60%;" class="div1">
        <h1 style="font-size: 50px;"><strong><?php echo $wiki->__get('nameWiki') ?></strong></h1>
        <h2 style="font-size: 20px;">Written by <strong><?php echo $wiki->__get('nameUser') ?></strong>  on <strong><?php echo $wiki->__get('dateWiki') ?></strong>  in Blogger, Images, Tag </h2>
        <p>
          <?php echo $wiki->__get('contentWiki') ?>
        </p>
        <?php
          if($_SESSION['id'] == $wiki->__get('idUser')){
        ?>
        <form method="POST" action="modifierWiki">
          <p id="openPopup" name="modifierWiki" value="<?php echo $wiki->__get('idWiki') ?>"  style="cursor: pointer ; text-decoration: underline; float:right ; padding: 0 36px 26px " href="#">Modifer</p>
        </form>
        <form  method="POST" action="deleteWiki">
          <button  name="deleteWiki" value="<?php echo $wiki->__get('idWiki') ?>" style=" color:red; cursor: pointer ; text-decoration: underline; float:right ; padding: 0 36px 26px " href="#">Supprimer</button>
        </form>
        <?php } ?>
      </div>
      <div style="width: 40%;" class="div2">
      
        <img src = "data:image/jpeg;base64,<?php echo $wiki->__get('image')?>">
      </div>
    </div>


    </div>
  </section>
      <?php  } ?>

<<!-- popup -->
<div class="popup" id="popup">
    <div class="popup-content">
        <form action="CreerWiki" method="POST" enctype="multipart/form-data">
            <label>Sélectionnez la Catégorie :</label>
            <select name="selectCat" class="form-control">
                <?php
                foreach ($data["categories"] as $categorie) {
                    echo "<option value='{$categorie->__get('idCategorie')}'>{$categorie->__get('nameCategorie')}</option>";
                }
                ?>
            </select>
            <label for="wikiTitle">Titre du Wiki:</label>
            <input type="text" id="wikiTitle" name="titre" placeholder="Exemple : " value="<?php echo $wiki->__get('nameWiki') ?>">
            <label for="wikiTitle">Image du Wiki:</label>
            <input id="file" type="file" name="myFile" class="drop-zone__input mb-3" multiple>
            <label for="wikiContent">Contenu du Wiki:</label>
            <textarea id="wikiContent" name="content" placeholder="Texte"><?php echo $wiki->__get('contentWiki') ?></textarea>
            <label for="tags">Tags du Wiki:</label>
            <div class="checkbox">
                <?php
                
                foreach ($data["tags"] as $tag) {
                    echo '<div class="chek">';
                    $isChecked = in_array($tag->__get('idTag'), $wiki->__get('tags')) ? 'checked' : '';
                    echo '<input id="box" type="checkbox" value="' . $tag->__get('idTag') . '" name="tag[]" ' . $isChecked . '>';
                    echo $tag->__get('nameTag');
                    echo "</div>";
                }
                ?>
            </div>
            <button type="submit" name="creerWiki">Créer Wiki</button>
        </form>
        <button id="fermer" onclick="closePopup()">Fermer</button>
    </div>
</div>




</main>
<script src="./../../public/assets/js/auteur.js"></script>
<?php 
// require_once __DIR__ . '/../../Views/components/footer.php';
?>
