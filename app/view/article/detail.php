<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); 

// var_dump($article);
?>


<div class="fiche-produit">
  <div class="rounded-nav">
  </div>
  <div>

    <div class="discover">
      <div class="label">
        <div class="white"><?=$article['art_name']; ?></div>
        <div><?=$article['art_price'];?>€</div>
      </div>
      <div>
        <a href="#">Acheter maintenant</a>
      </div>
    </div>

    <div class="card-container first">

      <div class="content">
        <img class="product-img" src="webroot/img/produits/<?=$article['img_url']; ?>" />
        <div>
          <div class="row">
            <h2><?=$article['art_name']; ?><span class="dot">.</span></h2>
          </div>
          <div class="row">
            Créateur :<a href="#">	<?=$article['user_fname'];?> <?=$article['user_lname'];?></a>
          </div>
          <div class="row">
            <div class="price btn"><?=$article['art_price'];?>€</div>
            <div>
              <select required="required"> 
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          <div class="row">
            <button class="red" onclick="toCard(<?= $article['art_ID'] ?>, <?= $article['art_price'] ?>)">Ajouter au panier</button>
          </div>
          <div class="row stars">
            <img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg">
          </div>
          <div class="row grey-13">
            <?=$article['art_desc'];?>
          </div>
        </div>
      </div>



		<div id="comments">
	      	<?php
			// var_dump($comments);
			foreach ($comments_art as $com) {
			?>

	      		<div class="content">
		            <div class="commentaire row">
		              <div class="column">
		                <div>
		                  <div class="stars">
		                    <img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg">
		                  </div>
		                  <div class="bold-17"><?=$com['com_content'];?></div>
		                  <div class="grey-13"><?=$com['com_date'];?> par <?=$com['user_fname'];?> <?=$com['user_lname'];?></div>
		                </div>
		              </div>
		              <!-- <div class="grades">
		                <div class="row">
		                  <div>Qualité<div class="qp-grade grey-13"><span class="red">•••</span>••</div></div>
		                </div>
		                <div class="row">
		                  <div>Prix<div class="qp-grade grey-13"><span class="red">••••</span>•</div></div>
		                </div>
		              </div> -->
		            </div>
			    </div>
			<?php } ?>
		</div>
		<!-- <div id="preloader"><img src="webroot/img/icons/loader.gif"></div> -->

    </div>
  </div>
</div>


<!-- <h3> Commentaires </h3>
 -->
<?php
// if($nb_comments > 0) {
// 	foreach ($comments as $row2) {
?>

<!-- <ul class="collection">
      <li class="collection-item"><?php echo $row2['user_crea_ID']; ?></li>
      <li class="collection-item"><?php echo $row2['com_content']; ?></li>
</ul> -->

<?php /*} ?>

        <?php } else { ?>

            <div >Aucun commentaire</div>

        <?php }

        include("app/view/commentaire/commentaire.php");*/ ?>




<script type="text/javascript">

function toCard(id, price){
	var artnb = $("#artnb").val();
  $.post("webroot/ajax/controller/panier/ajout.php", { art : id , nbarts : artnb , prix : price }, function(nb_arts){
    $(".menu .notif").show();
    $(".menu .notif").html(nb_arts);
  });
}

</script>


<?php include("app/view/layout/footer.inc.php"); ?>
