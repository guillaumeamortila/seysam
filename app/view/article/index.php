<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>


  <div class="content accueil" id="content_home">
    <div class="text">
      <h1>La marketplace collaborative d'objets faits-main<span class="dot">.</span></h1>
      <div><button class="red">Idées cadeaux</button></div>
    </div>
  </div>

<!-- </div>
 -->
<div class="discover">
  <div class="label">
    <div class="white">Vous découvrez Seysam ?</div>
    <div>Consultez nos guides.</div>
  </div>
  <div>
    <a href="?module=common_page&action=concept">Concept</a>
    <a href="?module=common_page&action=manuel_vendeur">Manuel du vendeur</a>
  </div>
  <div>
    <img class="close-ftr" src="webroot/img/icons/close-discover-seysam.svg">
  </div>
</div>


<!-- <div class="content">
  <div class="card-container first">

    <div>
      <h2>Créations populaires<span class="dot">.</span></h2>
    </div> -->

    <?php

    foreach ($categories as $cat) {
      $existing = 0;
      foreach ($sub_categories as $sub_cat) {
        if ($sub_cat["scat_cat_ID"]==$cat["cat_ID"])
          $existing = 1;
      }

      if($existing==1){

    ?>
      <div class="content" id="content<?=$cat['cat_ID']?>">
      <div class="card-container">

      <div>
        <h2><?=$cat["cat_name"]; ?><span class="dot">.</span></h2>
      </div>
    <?php
      // echo("<h1>".$cat["cat_name"]."</h1>");
        $increment =  0;
        $nb_articles = 0;

        foreach ($articles as $art) {

          if($cat["cat_name"]==$art["cat_name"] && $nb_articles<ARTICLES_PER_CAT){

            // if ($nb_articles==6) {
            //   exit;
            // }
            if ($increment == 0){
              echo "<div class='row'>";
            }

            include("app/view/article/index_card.php");

              if ($increment == 2){
                echo "</div>";
                $increment = 0;
              } else {
                $increment++;
              }
              $nb_articles++;
           }

        }
        // echo "<h1>".$nb_articles."</h1>";

        if($increment==1 || $increment==2)
        echo "</div>";


      if($nb_articles>=ARTICLES_PER_CAT){
      ?>
      <div><button id="reload_btn<?=$cat['cat_ID']?>" class="red" onclick="var nb=<?=$cat['cat_ID']?>; reload_card_index(nb);">Charger plus d'articles</button></div>
      <div id="result"></div>
      <?php } ?>

      </div>
    </div>
<?php
      }
    }
?>

<script type="text/javascript">

function reload_card_index(nb){
  var content=document.getElementById('content'+nb);
  $(content).load('webroot/ajax/controller/article/reload_card_index.php #content'+nb);

}

function toCard(id, price){
  $.post("webroot/ajax/controller/panier/ajout.php", { art : id , prix : price }, function(nb_arts){
    $(".menu .notif").show();
    $(".menu .notif").html(nb_arts);
  });
}

</script>





<div class="content inscr">
  <h2>Entrez dans la communauté<span class="dot">.</span></h2>
  <p>Créez un compte pour pouvoir créer votre boutique en ligne d’objets faits-main. Vous recevrez également des remises et des offres exceptionnelles sur les produits d’autres créateurs et les actualités de la communauté Seysam.</p>
</div>
<div class="content infography"></div>




	<?php include("app/view/layout/footer.inc.php"); ?>