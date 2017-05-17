<?php

if(!defined(_BASE_URL)) die("Ressource interdite");

include("app/view/layout/header.php"); ?>

<div class="bloc" id="postctnr">
	<div id="menu_arts">
		<h1>Derniers produits mis en ligne</h1>
		<div class="menu_sep2"></div>
		<div id="formselectorder" class="ctform">
			<div>trier par :</div>
			<form id="formorder">
				<select id="selectorder">
					<option value="art_date">date d'ajout</option>
					<option value="cat_name">catégorie</option>
					<option value="art_price">prix</option>
					<!--<option value="com_ranking">note</option>-->
					<option value="art_name">nom</option>
				</select>
			</form>
			<i class="material-icons">keyboard_arrow_down</i>
		</div>
		<div id="ctform">
			<form id="formsearch">
				<input type="text" name="saisie" id="saisie" placeholder="Rechercher rapide" <?php if(isset($_GET['search'])) echo 'value="'.$_GET["search"].'"' ?> />
				<i class="material-icons">youtube_searched_for</i>
			</form>
		</div>
	</div>

	<div id="search_result"></div>


	<div class="content">
		<div class="card-container" id="produitsctnr">
		<?php
		$increment = -2;
		foreach ($articles as $art)
		{
			$imgurl = $art['img_url'];
			$username = $art['user_fname']." ".$art['user_lname'];

			if($increment == -2 || $increment == 2)
				echo "<div class='row'>";

				?>
				<div class="card">
					<div class="card-cat"><?= $art['cat_name']." › ".$art['scat_name'] ?></div>
				
				<?php
				echo "<img src='../webroot/img/produits/".$imgurl."' alt='".$art['art_name']."' title='".$art['art_name']."' >"; ?>
					<div>
						<h3><?= $art['art_name'] ?></h3>
						<div class="createur">Création par <a href="?pt=prod&module=comptes&action=compte_crea&id=<?= $art['ID'] ?>"><?= $username ?></a></div>
						<div class="description"><?= $art['art_desc'] ?></div>
					</div>
					<div class="cta">
						<div class="price btn"><?= $art['art_price'] ?> €</div>
					</div>
					<a href="mailto:<?= $art['user_mail'] ?>"><button class="boutonrd">contacter le créateur</button></a>
					<a href="?pt=prod&module=produits&action=delete&id=<?= $art['art_ID'] ?>" onclick="return confirm('Supprimer définitivement cette fiche produit ?')"><button class="boutonsuppr">supprimer le produit</button></a>
				</div>
				
				<?php

				if ($increment == 16){
					echo "</div>";
					$increment = 2;
				}
				else {
					$increment = $increment * $increment;
				}
			}
			if ($increment == 4)
				echo "</div>";
			?>
		</div>
	</div>


</div>
<div id="preloader"><img src="webroot/img/loader.gif"></div>


<script type="text/javascript">
$(document).ready(function(){

	// Recharge auto articles

	var page = 1;
	var load = false; // booléen pour ne pas renouveler l'action avant l'affichage des articles ou en bas de page
	var hToBot;
	var order = "DESC";
	var value = $("#selectorder").val();


	$(window).scroll(function(){
		hToBot = ($(document).height() - $(window).height() - $(window).scrollTop());

		if(hToBot < 30){
			if(!load){
				load = true;
				$("#preloader").show();
				page++;

				// Affichage des articles
				$.post("webroot/ajax/produits_scroll.php?page="+page, { orderby : value , orderway : order }, function(articles){
					$("#produitsctnr").append(articles);
					$("#preloader").hide();
				});
			}
		} else {
			if (load == true)
				load = false;
		}
	});


	// Recherche Select


	function ajaxSelectOrder(){
		page = 1;
		value = $("#selectorder").val();
		console.log(value+" "+order);
		$.post("webroot/ajax/produits_select.php", { orderby : value , orderway : order }, function(texte){
			$("#produitsctnr").html(texte);
		});
	}

	$("#selectorder").on("change", ajaxSelectOrder);

	$("#formselectorder").find("i.material-icons").on("click", function(){
		if (order == "DESC"){
			order = "ASC";
			$("#formselectorder").find("i.material-icons").css("transform","rotate(-180deg)");
		} else {
			order = "DESC";
			$("#formselectorder").find("i.material-icons").css("transform","rotate(0deg)");
		}
		ajaxSelectOrder();
	});


	// Recherche Ajax

	var saisieval = "";

	$("#saisie").keyup(function(){
		if($("#saisie").val().length > 1){
			saisieval = $("#saisie").val();
			$.post("webroot/ajax/ajaxAutoProd.php", { saisie : saisieval, orderby : value , orderway : order }, function(texte){
				$("#search_result").html(texte);
			});
		}
		else if($("#saisie").val().length < 1){
			$("#search_result").html("");
		}
	});

	if ($("#saisie").val().length > 1){
		saisieval = $("#saisie").val();
		$.post("webroot/ajax/ajaxAutoProd.php", { saisie : saisieval, orderby : value , orderway : order }, function(texte){
			$("#search_result").html(texte);
		});
	}

});


</script>

<?php include("app/view/layout/footer.php"); ?>


