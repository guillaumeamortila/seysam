<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); 

// var_dump($article);
?>

<div class="article">
	<div class="rounded-nav"></div>

	<div class="card-container first row">
		<div class="width-75">

			<div class="entete">
				<div>
					<a href="?module=actualite&action=index" class="row back">
						<i class="material-icons">keyboard_arrow_left</i>
						<div>Retour</div>
					</a>
				</div>
				<h1><?=$actualite['blog_art_title']; ?><span class="dot">.</span></h1>
				<div><?=$actualite['blog_art_date']; ?>, <?=$actualite['admin_fname']; ?> <?=$actualite['admin_lname']; ?></div>
			</div>
			<div class="border row">

				<div class="infos">
					<?=$actualite['blog_art_content']; ?>
				</div>
			</div>
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



$(document).ready(function(){

// var id_article= recupParam('id');

// 	// Recharge auto articles

// 	var page = 1;
// 	var load = false; // booléen pour ne pas renouveler l'action avant l'affichage des articles ou en bas de page
// 	var hToBot;

// 	$(window).scroll(function(){
// 		hToBot = ($(document).height() - $(window).height() - $(window).scrollTop());
// 		console.log($(window).scrollTop	());

// 		if(hToBot < 30){
// 			if(!load){
// 				load = true;
// 				$("#preloader").show();
// 				page++;

// 				// Affichage des commentaires
// 				$.get("webroot/ajax/controller/commentaire/scroll_comments.php",{ page: page, id:  id_article}, function(commentaires){
// 					$("#comments").append(commentaires);
// 					$("#preloader").hide();
// 				});
// 			}
// 		} else {
// 			if (load == true)
// 				load = false;
// 		}
// 	});

// });
</script>


<?php include("app/view/layout/footer.inc.php"); ?>
