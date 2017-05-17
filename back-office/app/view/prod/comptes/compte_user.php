<?php include("app/view/layout/header.php"); ?>


<div class="bloc puser">
	<h1>Tout sur l'utilisateur <?= $user['user_fname']." ".$user['user_lname'] ?></h1>
	<div class="cptbloc" id="cptinfos">
		<h2>INFORMATIONS PERSONNELLES</h2>
		
		<div class="flexrow" id="usercreactnr">
			<div class="pusersep" id="sepcrea">
				<ul class="userul">
					<li>
						<h3>Photo de profil de <?= $user['user_fname'] ?></h3>
					</li>
					<li class="ppcompte">
						<img src="../webroot/img/profils/<?= $user['user_image_url'] ?>" alt="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>" title="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>">
					</li>
				</ul>
			</div>
			<div class="pusersep" id="sepuser">
				<ul class="userul address">
					<li>
						<h3>Ses addresse(s)</h3>
					</li>
					<?php

					if (empty($addresses))
						echo "<li><p class='userempty'>Aucune adresse enregistrée</p></li>";

					foreach ($addresses as $home)
					{ ?>
					<li class="addresstitle">
						<p><?= $home['address_order'] ?>. <span><?= $home['address_name'] ?></span></p>
					</li>
					<li>
						<?= $home['address_num_road'] ?>,<br>
						<?= $home['address_code']." ".$home['address_city'] ?>
					</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
		<div>
			<a href="mailto:<?= $user['user_mail'] ?>" class="firstbouton"><button class="boutonrd">contacter le créateur</button></a>
			<a href="?pt=prod&module=comptes&action=delete&id=<?= $user['ID'] ?>" onclick="return confirm('Supprimer définitivement cette fiche produit ?')"><button class="boutonrd boutonsuppr">supprimer le créateur</button></a>
		</div>
	</div>

	<div class="cptbloc" id="cptlikes">
		<h2 id="cptprods">PRODUITS LIKÉS PAR <?= strtoupper($user['user_fname']) ?></h2>
		<div class="card-container">
		<?php

		if (empty($likes))
			echo "<p class='userempty'>Aucun like pour le moment</p>";

		$increment = -2;
		foreach ($likes as $like)
		{

			$imgurl = $like['img_url'];

			$username = $like['user_fname']." ".$like['user_lname'];

			if($increment == -2 || $increment == 2)
				echo "<div class='row'>";

				?>
				<div class="card">
					<div class="card-cat"><?= $like['cat_name']." › ".$like['scat_name'] ?></div>
				
				<?php
				echo "<img src='../webroot/img/produits/".$imgurl."' alt='".$like['art_name']."' title='".$like['art_name']."' >"; ?>
					<div>
						<h3><a href="?pt=prod&module=produits&action=produits&search=<?= $like['art_name'] ?>"><?= $like['art_name'] ?></a></h3>
						<div class="createur">Création par <a href="#"><?= $username ?></a></div>
						<div class="description"><?= $like['art_desc'] ?></div>
					</div>
					<div class="cta">
						<div class="price btn"><?= $like['art_price'] ?> €</div>
					</div>
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
	<p id="retourlist"><a href="?pt=prod&module=comptes&action=comptes">« retour à la liste</a></p>
</div>

<?php include("app/view/layout/footer.php"); ?>


