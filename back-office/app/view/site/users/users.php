<?php include("app/view/layout/header.php"); ?>

<script type="text/javascript" src="webroot/js/users_add_user.js"></script>

<div class="bloc">
	<h1>Liste des administrateurs</h1>
	<ul id="listuserspage">
		<?php foreach ($users as $user) { ?>
			<li id="user<?= $user['admin_ID'] ?>" class="user"><br>
				<h2><a href="?pt=site&module=users&action=user&id=<?=$user['admin_ID']?>" title="voir les articles"><?= $user['admin_fname']." ".$user['admin_lname'] ?></a></h2>
				<?php
				if(isset($_SESSION["user"]) && (($_SESSION["user"]["admin_ID"] == $user["admin_ID"]) || ($_SESSION["level"] == USER_ADMIN))){ ?>
					<br>
					<p>Modifier les informations :</p>
					<br>
					<form id="formuser<?= $user['admin_ID'] ?>" class="formusermodif" method="post" action="?pt=site&module=users&action=modifyuser&id=<?=$user['admin_ID']?>">
						<div id="ctform" class="ctform">
							<div>
								<p class="error"></p>
							</div>
							<div>
								<input id="fname<?= $user['admin_ID'] ?>" type="text" name="fname" maxlength="50" value="<?= $user['admin_fname'] ?>" required="required">
								<label for="fname<?= $user['admin_ID'] ?>">Prénom</label>
							</div>
							<div>
								<input id="lname<?= $user['admin_ID'] ?>" type="text" name="lname" maxlength="50" value="<?= $user['admin_lname'] ?>" required="required">
								<label for="lname<?= $user['admin_ID'] ?>">Nom</label>
							</div>
							<div>
								<input id="mail<?= $user['admin_ID'] ?>" type="email" name="mail" maxlength="50" value="<?= $user['admin_mail'] ?>" required="required">
								<label for="mail<?= $user['admin_ID'] ?>">Mail</label>
							</div>
							<div>
								<input id="login<?= $user['admin_ID'] ?>" type="text" name="login" maxlength="50" value="<?= $user['admin_login'] ?>" required="required">
								<label for="login<?= $user['admin_ID'] ?>">Login</label>
							</div>
							<div>
								<input id="pass<?= $user['admin_ID'] ?>" type="password" name="pass" maxlength="50" required="required">
								<label for="pass<?= $user['admin_ID'] ?>">Mot de passe</label>
							</div>
							<button id="bouton" onclick="return confirm('Modifier toutes les informations de cet utilisateur ?')" type="submit"><b>MODIFIER</b></button>
						</div>
					</form>
					<div class="supprctnr">
						<a href="?pt=site&module=users&action=delete&id=<?=$user['admin_ID']?>"><button class="boutonsuppr" onclick="return confirm('supprimer cet utilisateur ?')">supprimer l'utilisateur</button></a>
					</div>
				<?php } ?>
			</li>
			<br>
		<?php }

		if ($_SESSION["level"] == USER_ADMIN) { ?>
			<br><br><br>
			<li>
			<button id="dispformuser" onclick="clickDisp()"><i class="material-icons">add_circle_outline</i> ajouter un utilsateur</button>
			<br>
			<form id="formuser" method="post" action="?pt=site&module=users&action=newuser">
				<div id="ctform" class="ctform">
					<div>
						<p class="error"></p>
					</div>
					<div>
						<input id="fname" type="text" name="fname" maxlength="50" required="required">
						<label for="fname">Prénom</label>
					</div>
					<div>
						<input id="lname" type="text" name="lname" maxlength="50" required="required">
						<label for="lname">Nom</label>
					</div>
					<div>
						<input id="mail" type="email" name="mail" maxlength="50" required="required">
						<label for="mail">Mail</label>
					</div>
					<div>
						<input id="login" type="text" name="login" maxlength="50" required="required">
						<label for="login">Login</label>
					</div>
					<div>
						<input id="pass" type="password" name="pass" maxlength="50" required="required">
						<label for="pass">Mot de passe</label>
					</div>
					<button id="bouton" onclick="return confirm('Créer un nouvel utilisateur ?')" type="submit"><b>AJOUTER</b></button>
				</div>
			</form>
			</li>
		
		<?php } ?>

	</ul>
	<br>
</div>

<script type="text/javascript">
	
var clicked = false;

function clickDisp(){
	if(clicked == false) {
		clicked = true;
		document.getElementById("dispformuser").innerHTML = "<i class='material-icons'>remove_circle_outline</i> réduire";
		document.getElementById("formuser").style.display = "flex";
	} else {
		clicked = false;
		document.getElementById("dispformuser").innerHTML = "<i class='material-icons'>add_circle_outline</i> ajouter un utilisateur";
		document.getElementById("formuser").style.display = "none";
	}
}


</script>

<?php include("app/view/layout/footer.php"); ?>

