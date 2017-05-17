<!DOCTYPE html>
<html lang="<?=PAGE_LANG?>">
<head>
	<meta charset="<?=PAGE_CHARSET?>">
	<title><?=PAGE_TITLE?></title>
	<link rel="icon" href="lib/img/favicon.ico" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="webroot/css/global.css">
	<script type="text/javascript" src="webroot/js/jquery-3.1.1.min.js"></script>
</head>
<body>
<div id="header">
	<div id="top-div">
		<h2>SEYSAM &nbsp;<span>BACK OFFICE</span></h2>
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
			}
			else
			{
				echo "<a href='?pt=site&module=users&action=logout'>SE DÉCONNECTER</a><br><a href='?pt=site&module=users&action=users#user".$_SESSION["user"]["admin_ID"]."'>MES INFOS</a>";
				if($_SESSION["level"] == USER_ADMIN){
					echo "<br><a href='?pt=site&module=users&action=users#dispformuser'>AJOUTER UN UTILISATEUR</a>";
				}
			}

			?>
		</div>
	</div>
	
	<ul id="head-nav-top">
		<li <?php if( (!isset($_GET["pt"])) || ($_GET["pt"] == "site") ) { echo "class='page-highlight'";} ?> ><a href="index.php">GÉRER LE SITE</a></li>
		<li <?php if( isset($_GET["pt"]) && ($_GET["pt"] == "prod") ) { echo "class='page-highlight'";} ?> ><a href="?pt=prod&module=produits&action=produits">PRODUITS & UTILISATEURS</a></li>
	</ul>


	<?php
	// Header SITE ou USER
	if( (!isset($_GET["pt"])) || ($_GET["pt"] == "site") ) { ?>
		<ul id="head-nav-bot" class="phright" >
			<li><a <?php if((!isset($_GET["module"]) && !isset($_GET["action"])) || ($_GET["module"] == "articles") ) { echo "class='page-link'";} ?> href="index.php"><i class="material-icons">keyboard_arrow_right</i>articles</a></li>
			<li><a <?php if(isset($_GET["module"]) && isset($_GET["action"]) && (($_GET["module"] == "users") && (($_GET["action"] == "users") || ($_GET["action"] == "user")))) { echo "class='page-link'";} ?> href="?pt=site&module=users&action=users"><i class="material-icons">keyboard_arrow_right</i>admins</a></li>
			<li><a <?php if( isset($_GET["module"]) && ($_GET["module"] == "categories") ) { echo "class='page-link'";} ?> href="?pt=site&module=categories&action=categories"><i class="material-icons">keyboard_arrow_right</i>catégories</a></li>
			<li><a <?php if(isset($_GET["action"]) && ($_GET["action"] == "pages")) { echo "class='page-link'";} ?> href="?pt=site&module=pages&action=pages"><i class="material-icons">keyboard_arrow_right</i>pages</a></li>
		</ul>
	<?php
	} else { ?>
		<ul id="head-nav-bot" class='phleft' >
			<li><a <?php if((!isset($_GET["module"]) && !isset($_GET["action"])) || ($_GET["module"] == "produits") ) { echo "class='page-link'";} ?> href="?pt=prod&module=produits&action=produits"><i class="material-icons">keyboard_arrow_right</i>produits</a></li>
			<li><a <?php if((!isset($_GET["module"]) && !isset($_GET["action"])) || ($_GET["module"] == "comments") ) { echo "class='page-link'";} ?> href="?pt=prod&module=comments&action=comments"><i class="material-icons">keyboard_arrow_right</i>commentaires</a></li>
			<li><a <?php if(isset($_GET["module"]) && ($_GET["module"] == "comptes")) { echo "class='page-link'";} ?> href="?pt=prod&module=comptes&action=comptes"><i class="material-icons">keyboard_arrow_right</i>comptes</a></li>
			<li><a <?php if(isset($_GET["module"]) && ($_GET["module"] == "orders")) { echo "class='page-link'";} ?> href="?pt=prod&module=orders&action=orders"><i class="material-icons">keyboard_arrow_right</i>commandes</a></li>
		</ul>
	<?php
	} ?>
</div>




