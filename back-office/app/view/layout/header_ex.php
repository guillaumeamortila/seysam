<!DOCTYPE html>
<html lang="<?=PAGE_LANG?>">
<head>
	<meta charset="<?=PAGE_CHARSET?>">
	<title><?=PAGE_TITLE?></title>
	<link rel="icon" href="lib/img/favicon.ico" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="webroot/css/global.css">
	<script type="text/javascript" src="webroot/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="webroot/js/connexion_ajax_jq.js"></script>
</head>
<body>
<div id="header">
	<div id="top-div">
		<h2>HEADER</h2>
		<div id="top-session">
			<?php
			if(!isset($_SESSION["user"]))
			{?>
			<span id="error"></span>
			<form method="post" id="ctform">
				<input id="login" type="text" name="login" required="required" placeholder="Login">
				<input id="pass" type="password" name="pass" required="required" placeholder="Password">
				<input type="submit" value="Connexion" id="connexion">
			</form>
			<?php
				//echo "<a href='?module=user&action=login'>SE CONNECTER</a>";
			}
			else
			{
				echo "<a href='?module=user&action=logout'>SE DÉCONNECTER</a><br><a href='?module=user&action=users#user".$_SESSION["user"]["ID"]."'>MES INFOS</a>";
				if($_SESSION["level"] == USER_ADMIN){
					echo "<br><a href='?module=user&action=users#dispformuser'>AJOUTER UN UTILISATEUR</a>";
				}
			}

			?>
		</div>
	</div>
	
	<ul>
		<li><a <?php if((!isset($_GET["module"]) && !isset($_GET["action"])) || ($_GET["module"] == "article") && ($_GET["action"] == "index")) { echo "class='page-link'";} ?> href="index.php">Accueil</a></li>
		<li><a <?php if(isset($_GET["module"]) && isset($_GET["action"]) && (($_GET["module"] == "user") && (($_GET["action"] == "users") || ($_GET["action"] == "user")))) { echo "class='page-link'";} ?> href="?module=user&action=users">Utilisateurs</a></li>
		<li><a <?php if(isset($_GET["module"]) && isset($_GET["action"]) && (($_GET["module"] == "categories") && (($_GET["action"] == "categories") || ($_GET["action"] == "category")))) { echo "class='page-link'";} ?> href="?module=categories&action=categories">Catégories</a></li>
		<li><a <?php if(isset($_GET["module"]) && isset($_GET["action"]) && (($_GET["module"] == "article") && ($_GET["action"] == "new"))) { echo "class='page-link'";} ?> href="?module=article&action=new">Écrire un article</a></li>
	</ul>
</div>
