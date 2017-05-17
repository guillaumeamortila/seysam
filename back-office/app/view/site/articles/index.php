<?php

if(!defined(_BASE_URL)) die("Ressource interdite");

include("app/view/layout/header.php"); ?>

<div class="bloc" id="postctnr">
	<div id="menu_arts">
		<h1>Derniers articles</h1>
		<div id="menu_art_separateur"></div>
		<a id="newart" href="?pt=site&module=articles&action=new"><i class="material-icons">description</i>Écrire un article</a>
		<div id="ctform">
			<form id="formsearch"> 
				<input type="text" name="saisie" id="saisie" placeholder="Rechercher rapide" />
				<i class="material-icons">youtube_searched_for</i>
			</form>
		</div>
	</div>

	<div id="search_result"></div>

	<?php
	foreach($articles as $article)
	{
	?>
		<ul class="index_art">
			<li class="ind_title">
				<h3><a href="?pt=site&module=articles&action=detail&id=<?=$article['blog_art_ID']?>"><?= $article['blog_art_title']; ?></a></h3>
			</li>
			<li class="ind_date">
				Écrit le <?php echo $article['blog_art_date']; ?>
			</li>
			<li class="ind_content">
				<?php echo nl2br($article['contenu']); ?>
			</li>
		</ul>
	<?php
	}
	?>
</div>
<div id="preloader"><img src="webroot/img/loader.gif"></div>


<script type="text/javascript">
$(document).ready(function(){

	// Recharge auto articles

	var page = 1;
	var load = false; // booléen pour ne pas renouveler l'action avant l'affichage des articles ou en bas de page
	var hToBot;

	$(window).scroll(function(){
		hToBot = ($(document).height() - $(window).height() - $(window).scrollTop());

		if(hToBot < 30){
			if(!load){
				load = true;
				$("#preloader").show();
				page++;

				// Affichage des articles
				$.get("webroot/ajax/index_scroll.php","page="+page, function(articles){
					$("#postctnr").append(articles);
					$("#preloader").hide();
				});
			}
		} else {
			if (load == true)
				load = false;
		}
	});


	// Recherche ajax

	$("#saisie").keyup(function(){
		if($("#saisie").val().length > 1){
			$.post("webroot/ajax/ajaxAuto1.php",$("#formsearch").serialize(), function(texte){
				$("#search_result").html(texte);
			});
		}
		else if($("#saisie").val().length < 1){
			$("#search_result").html("");
		}
	});

});


</script>

<?php include("app/view/layout/footer.php"); ?>


