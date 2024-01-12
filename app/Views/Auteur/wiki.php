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
          <button name="modifierWiki" value="<?php echo $wiki->__get('idWiki') ?>"  style="cursor: pointer ; text-decoration: underline; float:right ; padding: 0 36px 26px " href="#">Modifer</button>
        </form>
        <form  method="POST" action="deleteWiki">
          <button name="deleteWiki" value="<?php echo $wiki->__get('idWiki') ?>" style=" color:red; cursor: pointer ; text-decoration: underline; float:right ; padding: 0 36px 26px " href="#">Supprimer</button>
        </form>
        <?php } ?>
      </div>
      <div style="width: 40%;" class="div2">
      
        <img src = "data:image/jpeg;base64,<?php echo $wiki->__get('image')?>">
        <a style="text-decoration: underline; float:right ; padding: 0 36px 26px " href="#">Read More</a>
      </div>
    </div>


    </div>
  </section>
      <?php  } ?>




</main>
<script src="./../../public/assets/js/auteur.js"></script>
