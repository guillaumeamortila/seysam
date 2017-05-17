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