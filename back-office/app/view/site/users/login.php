<!DOCTYPE html>
<html>
<head>
	<meta charset="<?=PAGE_CHARSET?>">
	<title><?=PAGE_TITLE?></title>
	<link rel="icon" href="lib/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="webroot/css/global.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="webroot/js/script.js"></script>
</head>
<body>
<div id="header"><h2>HEADER</h2></div>
<div id="bloc-esthetic"></div>
<div class="bloc">
	<h1>Connexion</h1>
	<form action="?pt=site&module=users&action=login" method="post" id="ctform">
		<div>
			<input id="id" type="text" name="login" required="required">
			<label for="id"> Identifiant : </label>
		</div>
		<div>
			<input id="pass" type="password" name="pass" required="required">
			<label for="pass">Mot de passe : </label>
		</div>
		<div>
			<input type="submit" value="Connexion" id="bouton">
		</div>
	</form>
</div>
<?php include("app/view/layout/footer.php"); ?>

