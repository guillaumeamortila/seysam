<?php include("app/view/layout/header.php"); ?>

<div class="bloc">
	<h1>Liste des articles de <?= $user["admin_fname"]." ".$user["admin_lname"] ?></h1>
	<ul id="user_art">
		<?php foreach ($user_arts as $user_art) { ?>
			<li class="ind_title"><br><h3><a href="?pt=site&module=articles&action=detail&id=<?=$user_art['blog_art_ID']?>"><?= $user_art['blog_art_title']; ?></a></h3></li>
			<li class="ind_date">Écrit le <?= $user_art['blog_art_date'] ?></li>
			<li class="ind_content"><p><?= $user_art['blog_art_content'] ?></p></li>
		<?php } ?>
	</ul>
	<br>
	<p id="retourlist"><a href="?pt=site&module=users&action=users">« retour à la liste des utilisateurs</a></p>
</div>

<?php include("app/view/layout/footer.php"); ?>

