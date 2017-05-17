<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<div class="actu">
	<div class="rounded-nav"></div>

	<div class="card-container first row">
		<div class="width-75">
			<div>
				<a href="?" class="row back">
					<i class="material-icons">keyboard_arrow_left</i>
					<div>Retour à l'accueil</div>
				</a>
			</div>
			<div>
				<h1>L'actualité de Seysam<span class="dot">.</span></h1>
			</div>
			<?php
			foreach ($actualites as $actu) {
			?>
				<div class="border row">
					<div class="infos">
						<a href="?module=actualite&action=detail&id=<?=$actu['blog_art_ID']; ?>">
							<div class="bold-17"><?=$actu["blog_art_title"]?><i class="material-icons">keyboard_arrow_right</i></div>
							<div><?=$actu["contenu"]?></div>
							<div class="grey-13"><?=$actu["blog_art_date"]?>, de <?=$actu["admin_fname"]?> <?=$actu["admin_lname"]?></div>
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include("app/view/layout/footer.inc.php"); ?>



