<?php 
require_once __DIR__ . '/../../Views/components/headerHom.php';


?>


<main class="">
  <section class="categories " style="margin-left: 0px;">
    <div class="categorie" >
    <?php
      foreach ($data["categories"] as $categorie) {
    ?>
    <button id="btn" value="<?php echo $categorie->__get('idCategorie') ?>"><strong><?php echo $categorie->__get('nameCategorie') ?></strong></button>
    <?php
      } 
    ?>
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


</main>
<?php 
require_once __DIR__ . '/../../Views/components/footer.php';
?>

<script src="./../../public/assets/js/auteur.js"></script>
