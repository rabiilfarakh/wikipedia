<?php 
require_once __DIR__ . '/../../Views/components/headerAut.php';

if(!isset($_SESSION['user']))
    header('location: http://localhost/wikipedia/public/users/login');
?>


<main class=" ">
  <section class="categories">
    <?php
      foreach ($data["categories"] as $categorie) {
    ?>
    <button id="btn" value="<?php echo $categorie->__get('idCategorie') ?>"><strong><?php echo $categorie->__get('nameCategorie') ?></strong></button>
    <?php
      } 
    ?>
  </section>
  <section class="divT">
    <div class="article">
      <div style="width: 60%;" class="div1">
        <h1 style="font-size: 50px;"><strong>DEMO POST WIKI AUTEUR</strong></h1>
        <h2 style="font-size: 20px;">Written by <strong>BTemplates</strong>  on <strong>11:24 AM</strong>  in Blogger, Images, Tag </h2>
        <p>
          Aquarium. Photo by Francisco.Nordic is the template number 4667 in BTemplates,
          where a total of 51 499 782 templates has been downloaded so far since 2008. 
          This template was created by NBThemes and is the 112th template published in BTemplates.
          com by this author.Download Nordic and more Blogger Templates...
        </p>
      </div>
      <div style="width: 40%;" class="div2">
        <img src = "./../../public/assets/img/wiki2.jpg">
        <a style="text-decoration: underline; float:right ; padding: 0 36px 26px " href="#">Read More</a>
      </div>
    </div>
      <div class="icon" id="openPopup">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg>
      </div>
    </div>
  </section>

  <!-- Popup -->
  <div class="popup" id="popup">
    <div class="popup-content">
      <form action="" method="POST">
        <label>Sélectionnez la Catégorie :</label>
          <select id="idTagModification" name="selectTag" class="form-control">
          <?php
            foreach($data["categories"] as $categorie) {
              echo "<option value='{$categorie->__get('idCategorie')}'>{$categorie->__get('nameCategorie')}</option>";
            }
            ?>
          </select>
        <label for="wikiTitle">Titre du Wiki:</label>
        <input type="text" id="wikiTitle" name="wikiTitle" placeholder="Exemple :   ">
        <label for="wikiContent">Contenu du Wiki:</label>
        <textarea id="wikiContent" name="wikiContent" placeholder="Texte"></textarea>
        <button type="submit">Créer Wiki</button>
      </form>
      <button id = "fermer" onclick="closePopup()">Fermer</button>
    </div>
  </div>


</main>
<script src="./../../public/assets/js/auteur.js"></script>
