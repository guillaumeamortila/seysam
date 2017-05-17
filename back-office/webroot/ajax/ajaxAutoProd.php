<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");
include_once("../../core/coremodel.php");


try{
	$query = $connexion->prepare(
		'SELECT *
			FROM seysam_articles, seysam_art_images, seysam_users, seysam_sub_categories, seysam_categories
			WHERE ID = art_user_ID
			AND img_art_ID = art_ID
			AND img_order = 1
			AND art_scat_ID = scat_ID
			AND cat_ID = scat_cat_ID
			AND (art_desc LIKE :clause
			OR art_name LIKE :clause
			OR user_fname LIKE :clause
			OR user_lname LIKE :clause
			OR scat_name LIKE :clause
			OR cat_name LIKE :clause)
			ORDER BY '.$_POST["orderby"].' '.$_POST["orderway"]);

	$saisie = '%' . trim($_POST["saisie"]) . '%';

	$query->bindParam(":clause", $saisie, PDO::PARAM_STR);
	$query->execute();
	$articles = $query->fetchAll(); 
	$query->closeCursor();

	if (sizeof($articles) == 0){
		echo "Pas de résultat à votre requète :(";
	} else {

		$images = selecttable("seysam_art_images");

		$users = selecttable("seysam_users");

		/*
		foreach($prods as $prod){
			echo "<div onclick='afficherProd(".$prod['art_ID'].")'><h2>".$prod['art_name']."</h2>";
			echo "<p>".$prod['art_desc']."</p>";
		}*/

		echo "<h3>Résultats de la recherche :</h3>";

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
				echo "<img src='webroot/img/produits/".$imgurl."' alt='".$art['art_name']."' title='".$art['art_name']."' >"; ?>
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

	}
	

}
catch (Exception $e){
	return false; 
}