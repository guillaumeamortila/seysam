<?php include("app/view/layout/header.php"); ?>

<div class="bloc">
	<div id="menu_arts">
		<h1>Derniers produits mis en ligne</h1>
		<div id="ctform">
			<form id="formsearch"> 
				<input type="text" name="saisie" id="saisie" placeholder="Rechercher rapide" />
				<i class="material-icons">youtube_searched_for</i>
			</form>
		</div>
	</div>
	<div id="search_result"></div>
	
	<div class="flexrow" id="usercreactnr">
		<div class="pusersep" id="sepcrea">

			<h2>CRÉATEURS</h2>

			<?php foreach ($users as $user)
			{
				if ($user['user_creator'])
				{
				?>

				<ul class="userul">
					<li class="topprofil">
						<a href="?pt=prod&module=comptes&action=compte_crea&id=<?= $user['ID'] ?>">
							<div class="profillistimg"><img src="../webroot/img/profils/<?= $user['user_image_url'] ?>" alt="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>" title="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>"></div>
							<h3><?= $user['user_fname']." ".$user['user_lname'] ?></h3>
						</a>
					</li>
					<li class="creadesc">
						<p>« <?= nl2br($user["user_crea_desc"]) ?> »</p>
					</li>
				</ul>
				<a href="mailto:<?= $user['user_mail'] ?>"><button class="boutonrd">contacter le créateur</button></a>
				<a href="?pt=prod&module=comptes&action=delete&id=<?= $user['ID'] ?>" onclick="return confirm('Supprimer définitivement cette fiche produit ?')"><button class="boutonrd boutonsuppr">supprimer le créateur</button></a>

			<?php
				}
			}
			?>

		</div>

		<div class="pusersep" id="sepuser">
			<h2>ACHETEURS</h2>

			<?php foreach ($users as $user)
			{
				if (!$user['user_creator'])
				{
				?>

				<ul class="userul">
					<li class="topprofil">
						<a href="?pt=prod&module=comptes&action=compte_user&id=<?= $user['ID'] ?>">
							<div class="profillistimg"><img src="../webroot/img/profils/<?= $user['user_image_url'] ?>" alt="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>" title="photo de profil de <?= $user['user_fname']." ".$user['user_lname'] ?>"></div>
							<h3><?= $user['user_fname']." ".$user['user_lname'] ?></h3>
						</a>
					</li>
				</ul>
				<a href="mailto:<?= $user['user_mail'] ?>"><button class="boutonrd">contacter l'utilisateur</button></a>
				<a href="?pt=prod&module=comptes&action=delete&id=<?= $user['ID'] ?>" onclick="return confirm('Supprimer définitivement cette fiche produit ?')"><button class="boutonrd boutonsuppr">supprimer l'utilisateur</button></a>

			<?php
				}
			}
			?>

		</div>
	</div>
</div>

<script type="text/javascript">
	
$(document).ready(function(){

	$("#saisie").keyup(function(){
		if($("#saisie").val().length > 1){
			console.log($("#formsearch").serialize());
			$.post("webroot/ajax/ajaxAutoComptes.php", $("#formsearch").serialize(), function(texte){
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


