<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");
include_once("../../core/coremodel.php");


try{
	$query = $connexion->prepare(
		'SELECT *
			FROM seysam_users
			WHERE user_crea_desc LIKE :clause
			OR user_fname LIKE :clause
			OR user_lname LIKE :clause
			ORDER BY user_creator DESC, ID DESC');

	$saisie = '%' . trim($_POST["saisie"]) . '%';

	$query->bindParam(":clause", $saisie, PDO::PARAM_STR);
	$query->execute();
	$users = $query->fetchAll(); 
	$query->closeCursor();

	if (sizeof($users) == 0){
		echo "Pas de résultat à votre requète :(";
	} else {

		echo "<h3>Résultats de la recherche :</h3>";

		foreach ($users as $user)
		{ ?>
			<ul class="userul">
				<li class="topprofil">
				<?php
				if ($user['user_creator'] == 1)
					echo "<p class='underline'>Compte createur :</p>";
				else
					echo "<p class='underline'>Compte utilisateur :</p>";
				?>
					<a href="?pt=prod&module=comptes&action=compte_crea&id=<?= $user['ID'] ?>">
						<div class="profillistimg"><img src="webroot/img/profil/<?= $user['user_image_url'] ?>" alt="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>" title="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>"></div>
						<h3><?= $user['user_fname']." ".$user['user_lname'] ?></h3>
					</a>
				</li>
				<li class="creadesc">
				<?php
				if ($user['user_creator'] == 1)
					echo "<p>« ".nl2br($user["user_crea_desc"])." »</p>";
				?>
				</li>
			</ul>
			<a href="mailto:<?= $user['user_mail'] ?>"><button class="boutonrd">contacter le créateur</button></a>
			<a href="?pt=prod&module=comptes&action=delete&id=<?= $user['ID'] ?>" onclick="return confirm('Supprimer définitivement cette fiche produit ?')"><button class="boutonrd boutonsuppr">supprimer le créateur</button></a>
		<?php
		}
	}

}
catch (Exception $e){
	return false; 
}