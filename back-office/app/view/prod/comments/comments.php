<?php include("app/view/layout/header.php"); ?>

<div class="bloc">
	<h1>Derniers commentaires</h1>
	

	<?php foreach ($comments as $com) {

		if ($com['user_creator'] == 1)
			$username = "<a href='?pt=prod&module=comptes&action=compte_crea&id=".$com['ID']."' title='profil de ".$com["user_fname"]."'>".$com['user_fname']." ".$com['user_lname']."</a>";
		else
			$username = "<a href='?pt=prod&module=comptes&action=compte_user&id=".$com['ID']."' title='profil de ".$com["user_fname"]."'>".$com['user_fname']." ".$com['user_lname']."</a>";

		$usermail = $com['user_mail'];
		$artname = $com['art_name'];
		$artdesc = $com['art_desc'];

		?>

		<ul class="pageul pagecom">
			<li class="legend">
				Le <?= $com['com_date'] ?>, <b> <?= $username ?> </b> a écrit :
			</li>
			<li class="catuldcat pagecontent">
				<p><?= nl2br($com['com_content']) ?></p>
			</li>
			<li class="legend">à propos du produit :</li>
			<li class="pcomart">
				<p><b><a href="?pt=prod&module=produits&action=produits&search=<?= $artname ?>"><?= $artname ?></a></b> • <?= $artdesc ?></p>
			</li>
		</ul>
		<a href="mailto:<?= $usermail ?>"><button class="boutonrd">contacter l'utilisateur</button></a>
		<a href="?pt=prod&module=comments&action=delete&id=<?= $com['com_ID'] ?>" onclick="return confirm('Supprimer définitivement cette fiche produit ?')"><button class="boutonrd boutonsuppr">supprimer le commentaire</button></a>

	<?php } ?>

</div>

<?php include("app/view/layout/footer.php"); ?>


